<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_data_testing extends CI_Model{

    public function __construct(){
        parent::__construct();
        date_default_timezone_set("Asia/Jakarta");
    }

    public function original(){
        $raw = "";
		for ($i=0; $i < $this->input->post('length'); $i++) { 
			$raw = $raw . $this->input->post('str'. $i);
		}
		
		$exploded = explode(',', $raw);
		$encoded = $exploded[1];
		$decoded = base64_decode($encoded);

		$image = imagecreatefromstring($decoded);
		$width = imagesx($image);
		$height = imagesy($image);

		$r = [[]];
		$g = [[]];
		$b = [[]];

		for ($y=0; $y < $height; $y++) { 
			for ($x=0; $x < $width; $x++) { 
				$rgb = imagecolorat($image, $x, $y);
				$r[$x][$y] = ($rgb >> 16) & 0xFF;
				$g[$x][$y] = ($rgb >> 8) & 0xFF;
				$b[$x][$y] = $rgb & 0xFF; 
			}
		}

		$img = imagecreatetruecolor($width, $height);
		for ($y=0; $y < $height; $y++) { 
			for ($x=0; $x < $width; $x++) { 
				imagesetpixel($img, $x, $y, imagecolorallocate($img, $r[$x][$y], $g[$x][$y], $b[$x][$y]));
			}
		}

		ob_start();
		imagejpeg($img);
		$contents = ob_get_contents();
		ob_end_clean();

		$base64 = "data:image/jpeg;base64," . base64_encode($contents);

		$result = [
			'r' => $r,
			'g' => $g,
			'b' => $b,
			'width' => $width,
			'height' => $height,
			'base64' => $base64
		];
		//echo json_encode($result);
		return $result;
    }
	
	public function grayscale(){
		
		$r = json_decode($this->input->post('r'), TRUE);
		$g = json_decode($this->input->post('g'), TRUE);
		$b = json_decode($this->input->post('b'), TRUE);
		$width = $this->input->post('width');
		$height = $this->input->post('height');
 
				$abu = [[]];
		
		for ($y=0; $y < $height; $y++) {
			for ($x=0; $x < $width; $x++) {
				$abu[$x][$y] = round(($r[$x][$y] + $g[$x][$y] + $b[$x][$y]) / (float) 3);
			}
		}
 
		$img = imagecreatetruecolor($width, $height);
		for ($y=0; $y < $height; $y++) {
   		 for ($x=0; $x < $width; $x++) {
     		   imagesetpixel($img, $x, $y, imagecolorallocate($img, $abu[$x][$y], $abu[$x][$y], $abu[$x][$y]));
    		}
		}
 
		ob_start();
   		 imagejpeg($img);
   		 $contents = ob_get_contents();
		ob_end_clean();
 
		$base64 = "data:image/jpeg;base64," . base64_encode($contents);
 
		$result = [
  		  'r' => $abu,
  		  'g' => $abu,
  		  'b' => $abu,
  		  'width' => $width,
  		  'height' => $height,
  		  'base64' => $base64
		];
		//echo json_encode($result);
		return $result;
	}

	function zoom(){
		$r = json_decode($this->input->post('r'), TRUE);
		$g = json_decode($this->input->post('g'), TRUE);
		$b = json_decode($this->input->post('b'), TRUE);
		$width =  $this->input->post('width');
		$height =  $this->input->post('height');
		$direction =  $this->input->post('direction');

		$zoomedr = [[]];
		$zoomedg = [[]];
		$zoomedb = [[]];

		if ($direction == 'in') {
			for ($y=0; $y <= $height; $y++) { 
				for ($x=0; $x <= $width; $x++) { 
				//kiri atas
				$zoomedr[$x][$y] = isset($r[$x - 1][$y - 1]) ? $r[$x - 1][$y - 1] : 0;
				$zoomedg[$x][$y] = isset($g[$x - 1][$y - 1]) ? $g[$x - 1][$y - 1] : 0;
				$zoomedb[$x][$y] = isset($b[$x - 1][$y - 1]) ? $b[$x - 1][$y - 1] : 0;
				//kanan atas
				$zoomedr[$x][$y] += isset($r[$x][$y - 1]) ? $r[$x][$y - 1] : 0;
				$zoomedg[$x][$y] += isset($g[$x][$y - 1]) ? $g[$x][$y - 1] : 0;
				$zoomedb[$x][$y] += isset($b[$x][$y - 1]) ? $b[$x][$y - 1] : 0;
				//kiri bawah
				$zoomedr[$x][$y] += isset($r[$x - 1][$y]) ? $r[$x - 1][$y] : 0;
				$zoomedg[$x][$y] += isset($g[$x - 1][$y]) ? $g[$x - 1][$y] : 0;
				$zoomedb[$x][$y] += isset($b[$x - 1][$y]) ? $b[$x - 1][$y] : 0;
				//kanan bawah
				$zoomedr[$x][$y] += isset($r[$x][$y]) ? $r[$x][$y] : 0;
				$zoomedg[$x][$y] += isset($g[$x][$y]) ? $g[$x][$y] : 0;
				$zoomedb[$x][$y] += isset($b[$x][$y]) ? $b[$x][$y] : 0;
				//rata-rata
				$zoomedr[$x][$y] = (int) ceil((float) $zoomedr[$x][$y] / 4);
				$zoomedg[$x][$y] = (int) ceil((float) $zoomedg[$x][$y] / 4);
				$zoomedb[$x][$y]	 = (int) ceil((float) $zoomedb[$x][$y] / 4);
			}
		}
			$height++;
			$width++;
		} else {
			for ($y=0; $y < ($height - 1); $y++) { 
				for ($x=0; $x < ($width - 1); $x++) { 
					$zoomedr[$x][$y] = (int) ceil(($r[$x][$y] + $r[$x + 1][$y] + $r[$x][$y + 1] + $r[$x + 1][$y + 1])/(float) 4);
					$zoomedg[$x][$y] = (int) ceil(($g[$x][$y] + $g[$x + 1][$y] + $g[$x][$y + 1] + $g[$x + 1][$y + 1])/(float) 4);
					$zoomedb[$x][$y] = (int) ceil(($b[$x][$y] + $b[$x + 1][$y] + $b[$x][$y + 1] + $b[$x + 1][$y + 1])/(float) 4);
				}
			}
		$height--;
		$width--;
		}

	$img = imagecreatetruecolor($width, $height);
		for ($y=0; $y < $height; $y++) { 
			for ($x=0; $x < $width; $x++) { 
				imagesetpixel($img, $x, $y, imagecolorallocate($img, $zoomedr[$x][$y], $zoomedg[$x][$y], $zoomedb[$x][$y]));
			}
		}

		ob_start();
		imagejpeg($img);
		$contents = ob_get_contents();
		ob_end_clean();

		$base64 = "data:image/jpeg;base64," . base64_encode($contents);

	$result = [
		'r' => $zoomedr,
		'g' => $zoomedg,
		'b' => $zoomedb,
		'width' => $width,
		'height' => $height,
		'base64' => $base64
	];
	return $result;
	}
		
	function dotmat($m1, $m2) {
		$res = 0;
		for ($i=0; $i < 3; $i++) { 
			for ($j=0; $j < 3; $j++) { 
				$res += $m1[$i][$j] * $m2[$i][$j];
			}
		}
		return (int) ceil($res);
	}

	function edge(){
		$r = json_decode($this->input->post('r'), TRUE);
		$g = json_decode($this->input->post('g'), TRUE);
		$b = json_decode($this->input->post('b'), TRUE);
		$width = $this->input->post('width');
		$height = $this->input->post('height');

		$edgedr = [[]];
		$edgedg = [[]];
		$edgedb = [[]];
	
		$m2 = [
			[-1, -1, -1],
			[-1, 8, -1],
			[-1, -1, -1]
		];
		
		for ($y=0; $y < $height; $y++) { 
			for ($x=0; $x < $width; $x++) {
				$m1r = [[]];
				$m1g = [[]];
				$m1b = [[]];
		
				for ($i=0; $i < 3; $i++) { 
					for ($j=0; $j < 3; $j++) { 
						$m1r[$i][$j] = isset($r[$x - ($j - 1)][$y - ($i - 1)]) ? $r[$x - ($j - 1)][$y - ($i - 1)] : 0;
						$m1g[$i][$j] = isset($g[$x - ($j - 1)][$y - ($i - 1)]) ? $g[$x - ($j - 1)][$y - ($i - 1)] : 0;
						$m1b[$i][$j] = isset($b[$x - ($j - 1)][$y - ($i - 1)]) ? $b[$x - ($j - 1)][$y - ($i - 1)] : 0;
					}
				}
		
				$edgedr[$x][$y] = $this->dotmat($m1r, $m2);
				$edgedg[$x][$y] = $this->dotmat($m1g, $m2);
				$edgedb[$x][$y] = $this->dotmat($m1b, $m2);
		
				//cek kelebihan
				if ($edgedr[$x][$y] > 255) { $edgedr[$x][$y] = 255; }
				if ($edgedg[$x][$y] > 255) { $edgedg[$x][$y] = 255; }
				if ($edgedb[$x][$y] > 255) { $edgedb[$x][$y] = 255; }
				//cek kekurangan
				if ($edgedr[$x][$y] < 0) { $edgedr[$x][$y] = 0; }
				if ($edgedg[$x][$y] < 0) { $edgedg[$x][$y] = 0; }
				if ($edgedb[$x][$y] < 0) { $edgedb[$x][$y] = 0; }
			}
		}
		
		$img = imagecreatetruecolor($width, $height);
		for ($y=0; $y < $height; $y++) { 
			for ($x=0; $x < $width; $x++) { 
				imagesetpixel($img, $x, $y, imagecolorallocate($img, $edgedr[$x][$y], $edgedg[$x][$y], $edgedb[$x][$y]));
			}
		}
		
		ob_start();
			imagejpeg($img);
			$contents = ob_get_contents();
		ob_end_clean();
		
		$base64 = "data:image/jpeg;base64," . base64_encode($contents);
		
		$result = [
			'r' => $edgedr,
			'g' => $edgedg,
			'b' => $edgedb,
			'width' => $width,
			'height' => $height,
			'base64' => $base64
		];
		return $result;
		//echo json_encode($result);
	}

	function median(){
		$count = count($arr);
		$middleval = floor(($count-1)/2);
		if($count % 2) {
			$median = $arr[$middleval];
		} else {
			$low = $arr[$middleval];
			$high = $arr[$middleval+1];
			$median = (($low+$high)/2);
		}
		return $median;
	}

	function medianfilter(){
		$r = json_decode($this->input->post('r'), TRUE);
		$g = json_decode($this->input->post('g'), TRUE);
		$b = json_decode($this->input->post('b'), TRUE);
		$width = $this->input->post('width');
		$height = $this->input->post('height');
		$direction = $this->input->post('direction');

		$smoothedr = [[]];
		$smoothedg = [[]];
		$smoothedb = [[]];

		for ($y=0; $y < $height; $y++) { 
			for ($x=0; $x < $width; $x++) {
				//mean
				$count = 0;
				$sumr = 0;
				$sumg = 0;
				$sumb = 0;
				//median
				$arrr = [];
				$arrg = [];
				$arrb = [];
		
				//kiri atas
				if (isset($r[$x-1][$y-1])) {
					$count++;
					$sumr += $r[$x-1][$y-1];
					$sumg += $g[$x-1][$y-1];
					$sumb += $b[$x-1][$y-1];
					array_push($arrr, $r[$x-1][$y-1]);
					array_push($arrg, $g[$x-1][$y-1]);
					array_push($arrb, $b[$x-1][$y-1]);
				}
				//atas
				if (isset($r[$x][$y-1])) {
					$count++;
					$sumr += $r[$x][$y-1];
					$sumg += $g[$x][$y-1];
					$sumb += $b[$x][$y-1];
					array_push($arrr, $r[$x][$y-1]);
					array_push($arrg, $g[$x][$y-1]);
					array_push($arrb, $b[$x][$y-1]);
				}
				//kanan atas
				if (isset($r[$x+1][$y-1])) {
					$count++;
					$sumr += $r[$x+1][$y-1];
					$sumg += $g[$x+1][$y-1];
					$sumb += $b[$x+1][$y-1];
					array_push($arrr, $r[$x+1][$y-1]);
					array_push($arrg, $g[$x+1][$y-1]);
					array_push($arrb, $b[$x+1][$y-1]);
				}
				//kiri
				if (isset($r[$x-1][$y])) {
					$count++;
					$sumr += $r[$x-1][$y];
					$sumg += $g[$x-1][$y];
					$sumb += $b[$x-1][$y];
					array_push($arrr, $r[$x-1][$y]);
					array_push($arrg, $g[$x-1][$y]);
					array_push($arrb, $b[$x-1][$y]);
				}
				//kanan
				if (isset($r[$x+1][$y])) {
					$count++;
					$sumr += $r[$x+1][$y];
					$sumg += $g[$x+1][$y];
					$sumb += $b[$x+1][$y];
					array_push($arrr, $r[$x+1][$y]);
					array_push($arrg, $g[$x+1][$y]);
					array_push($arrb, $b[$x+1][$y]);
				}
				//kiri bawah
				if (isset($r[$x-1][$y+1])) {
					$count++;
					$sumr += $r[$x-1][$y+1];
					$sumg += $g[$x-1][$y+1];
					$sumb += $b[$x-1][$y+1];
					array_push($arrr, $r[$x-1][$y+1]);
					array_push($arrg, $g[$x-1][$y+1]);
					array_push($arrb, $b[$x-1][$y+1]);
				}
				//bawah
				if (isset($r[$x][$y+1])) {
					$count++;
					$sumr += $r[$x][$y+1];
					$sumg += $g[$x][$y+1];
					$sumb += $b[$x][$y+1];
					array_push($arrr, $r[$x][$y+1]);
					array_push($arrg, $g[$x][$y+1]);
					array_push($arrb, $b[$x][$y+1]);
				}
				//kanan bawah
				if (isset($r[$x+1][$y+1])) {
					$count++;
					$sumr += $r[$x+1][$y+1];
					$sumg += $g[$x+1][$y+1];
					$sumb += $b[$x+1][$y+1];
					array_push($arrr, $r[$x+1][$y+1]);
					array_push($arrg, $g[$x+1][$y+1]);
					array_push($arrb, $b[$x+1][$y+1]);
				}
		
				if ($direction == 'mean') {
					if ($count == 0) {
						$smoothedr[$x][$y] = 0;
						$smoothedg[$x][$y] = 0;
						$smoothedb[$x][$y] = 0;
					} else {
						$smoothedr[$x][$y] = (int) ceil($sumr/(float) $count);
						$smoothedg[$x][$y] = (int) ceil($sumg/(float) $count);
						$smoothedb[$x][$y] = (int) ceil($sumb/(float) $count);
					}
				} else {
					sort($arrr);
					sort($arrg);
					sort($arrb);
					$smoothedr[$x][$y] = $this->median($arrr);
					$smoothedg[$x][$y] = $this->median($arrg);
					$smoothedb[$x][$y] = $this->median($arrb);
				}
			}
		}
		
		$img = imagecreatetruecolor($width, $height);
		for ($y=0; $y < $height; $y++) { 
			for ($x=0; $x < $width; $x++) { 
				imagesetpixel($img, $x, $y, imagecolorallocate($img, $smoothedr[$x][$y], $smoothedg[$x][$y], $smoothedb[$x][$y]));
			}
		}

		ob_start();
			imagejpeg($img);
			$contents = ob_get_contents();
		ob_end_clean();

		$base64 = "data:image/jpeg;base64," . base64_encode($contents);

		$result = [
			'r' => $smoothedr,
			'g' => $smoothedg,
			'b' => $smoothedb,
			'width' => $width,
			'height' => $height,
			'base64' => $base64
		];
		//echo json_encode($result);
		return $result;
	}

	function slider(){
		$r = json_decode($this->input->post('r'), TRUE);
		$g = json_decode($this->input->post('g'), TRUE);
		$b = json_decode($this->input->post('b'), TRUE);
		$width = $this->input->post('width');
		$height = $this->input->post('height');
		$value = $this->input->post('val');
		$valawal = $this->input->post('valawal');
		
		
		$edgedr = [[]];
		$edgedg = [[]];
		$edgedb = [[]];

		if ($value > $valawal) {
			for ($y=0; $y <= $height; $y++) { 
				for ($x=0; $x <= $width; $x++) { 
				//kiri atas
				$zoomedr[$x][$y] = isset($r[$x - 1][$y - 1]) ? $r[$x - 1][$y - 1] : 0;
				$zoomedg[$x][$y] = isset($g[$x - 1][$y - 1]) ? $g[$x - 1][$y - 1] : 0;
				$zoomedb[$x][$y] = isset($b[$x - 1][$y - 1]) ? $b[$x - 1][$y - 1] : 0;
				//kanan atas
				$zoomedr[$x][$y] += isset($r[$x][$y - 1]) ? $r[$x][$y - 1] : 0;
				$zoomedg[$x][$y] += isset($g[$x][$y - 1]) ? $g[$x][$y - 1] : 0;
				$zoomedb[$x][$y] += isset($b[$x][$y - 1]) ? $b[$x][$y - 1] : 0;
				//kiri bawah
				$zoomedr[$x][$y] += isset($r[$x - 1][$y]) ? $r[$x - 1][$y] : 0;
				$zoomedg[$x][$y] += isset($g[$x - 1][$y]) ? $g[$x - 1][$y] : 0;
				$zoomedb[$x][$y] += isset($b[$x - 1][$y]) ? $b[$x - 1][$y] : 0;
				//kanan bawah
				$zoomedr[$x][$y] += isset($r[$x][$y]) ? $r[$x][$y] : 0;
				$zoomedg[$x][$y] += isset($g[$x][$y]) ? $g[$x][$y] : 0;
				$zoomedb[$x][$y] += isset($b[$x][$y]) ? $b[$x][$y] : 0;
				//rata-rata
				$zoomedr[$x][$y] = (int) ceil((float) $zoomedr[$x][$y] / 4);
				$zoomedg[$x][$y] = (int) ceil((float) $zoomedg[$x][$y] / 4);
				$zoomedb[$x][$y]	 = (int) ceil((float) $zoomedb[$x][$y] / 4);
			}
		}
		$height++;
		$width++;
		} 
		if ($value < $valawal){
			for ($y=0; $y < ($height - 1); $y++) { 
				for ($x=0; $x < ($width - 1); $x++) { 
					$zoomedr[$x][$y] = (int) ceil(($r[$x][$y] + $r[$x + 1][$y] + $r[$x][$y + 1] + $r[$x + 1][$y + 1])/(float) 4);
					$zoomedg[$x][$y] = (int) ceil(($g[$x][$y] + $g[$x + 1][$y] + $g[$x][$y + 1] + $g[$x + 1][$y + 1])/(float) 4);
					$zoomedb[$x][$y] = (int) ceil(($b[$x][$y] + $b[$x + 1][$y] + $b[$x][$y + 1] + $b[$x + 1][$y + 1])/(float) 4);
				}
			}
		$height--;
		$width--;
		}
			$img = imagecreatetruecolor($width, $height);
		for ($y=0; $y < $height; $y++) { 
			for ($x=0; $x < $width; $x++) { 
				imagesetpixel($img, $x, $y, imagecolorallocate($img, $zoomedr[$x][$y], $zoomedg[$x][$y], $zoomedb[$x][$y]));
			}
		}

		ob_start();
			imagejpeg($img);
			$contents = ob_get_contents();
		ob_end_clean();

		$base64 = "data:image/jpeg;base64," . base64_encode($contents);

		$result = [
			'r' => $zoomedr,
			'g' => $zoomedg,
			'b' => $zoomedb,
			'width' => $width,
			'height' => $height,
			'base64' => $base64
		];
		return $result;
		}
}