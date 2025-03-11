<script>
var base64;
var origin = {
	r: [[]],
	g: [[]],
	b: [[]],
	width: 0,
	height: 0
}
var edited = {
	r: [[]],
	g: [[]],
	b: [[]],
	width: 0,
	height: 0
}
var snd;

function splitstring(str, l) {
	var strs = [];
	var strlen = str.length;
	var tmp = "";
	for (var i = 0; i < strlen; i++) {
		tmp += str[i];
		if (tmp.length == l) {
			strs.push(tmp);
			tmp = "";
		}
	}
	strs.push(tmp);
	var result = {jml: strs.length, splitted: strs};
	return result;
}

function original() {
	$('#progress').show();
	if ($('#image-up').prop('files')[0]) {
		var reader = new FileReader();
		reader.onload = function (e) {
			base64 = e.target.result;
			$('#ori-image').attr('src', base64);
			snd = splitstring(base64, 1000);
			var rv = {length: snd.jml};
			for (var i = 0; i < snd.jml; i++) {
				var label = "str" + i;
				rv[label] = snd.splitted[i];
			}
			$.ajax({
				type: 'POST',
				url: "<?= base_url('img-original'); ?>",
				data: rv,
				success: function(data) {
					data = JSON.parse(data);
					$('#edit-image').attr('src', data.base64);
					$('#progress').hide();
					origin.r = data.r;
					origin.g = data.g;
					origin.b = data.b;
					origin.width = data.width;
					origin.height = data.height;
					edited = origin;
				},
				async: false
			});
		};
		reader.readAsDataURL($('#image-up').prop('files')[0]);
		
	}
}

function grayscale() {
    $('#progress').show();
    $.ajax({
        method: 'POST',
        url: "<?= base_url('img-gs'); ?>",
        data: {
            r: JSON.stringify(edited.r),
            g: JSON.stringify(edited.g),
            b: JSON.stringify(edited.b),
            width: edited.width,
            height: edited.height
        },
        success: function(data) {
            data = JSON.parse(data);
            $('#edit-image').attr('src', data.base64);
            $('#progress').hide();
            edited.r = data.r;
            edited.g = data.g;
            edited.b = data.b;
            edited.width = parseInt(data.width);
            edited.height = parseInt(data.height);
        },
        async: false
    });
}

function zoom(direction) {
	$('#progress').show();
	$.ajax({
		type: 'POST',
		url: "<?= base_url('img-zoom'); ?>",
		data: {
			r: JSON.stringify(edited.r),
			g: JSON.stringify(edited.g),
			b: JSON.stringify(edited.b),
			width: edited.width,
			height: edited.height,
			direction: direction
		},
		success: function(data) {
			data = JSON.parse(data);
			$('#edit-image').attr('src', data.base64);
			$('#progress').hide();
			edited.r = data.r;
			edited.g = data.g;
			edited.b = data.b;
			edited.width = parseInt(data.width);
			edited.height = parseInt(data.height);
		},
		async: false
	});
}

function edge() {
	$('#progress').show();
	$.ajax({
		type: 'POST',
		url: "<?= base_url('img-edge'); ?>",
		data: {
			r: JSON.stringify(edited.r),
			g: JSON.stringify(edited.g),
			b: JSON.stringify(edited.b),
			width: edited.width,
			height: edited.height
		},
		success: function(data) {
			data = JSON.parse(data);
			$('#edit-image').attr('src', data.base64);
			$('#progress').hide();
			edited.r = data.r;
			edited.g = data.g;
			edited.b = data.b;
			edited.width = parseInt(data.width);
			edited.height = parseInt(data.height);
		},
		async: false
	});
}

function medianfilter(){
	$('#progress').show();
	$.ajax({
		type: 'POST',
		url: "<?= base_url('img-median-filter'); ?>",
		data: {
			r: JSON.stringify(edited.r),
			g: JSON.stringify(edited.g),
			b: JSON.stringify(edited.b),
			width: edited.width,
			height: edited.height,
		},
		success: function(data) {
			data = JSON.parse(data);
			$('#edit-image').attr('src', data.base64);
			$('#progress').hide();
			edited.r = data.r;
			edited.g = data.g;
			edited.b = data.b;
			edited.width = parseInt(data.width);
			edited.height = parseInt(data.height);
		},
		async: false
	});
}


function slider(v){
	//alert("oke");
	var valawal=$('#valawal').val(v-1);
	var valsekarang=$('#valsekarang').val();
	if(parseInt(valsekarang) == 0){
		$('#valsekarang').val(v);
	}else{
		if(parseInt(v) > parseInt(valsekarang)){
			$('#valsekarang').val(v);
		}else{
			if(parseInt(valsekarang-v)){
			$('#valsekarang').val(valsekarang);
			}
			if(parseInt(valsekarang)<=2){
			$('#valawal').val(valsekarang-1);
			}
		}
	}
	// $('#progress').show();
	// $.ajax({
	// 	type: 'POST',
	// 	url: "",
	// 	data: {
	// 		r: JSON.stringify(edited.r),
	// 		g: JSON.stringify(edited.g),
	// 		b: JSON.stringify(edited.b),
	// 		width: edited.width,
	// 		height: edited.height,
	// 		val: val,
	// 		valawal: valawal,
	// 		valsekarang: valsekarang
	// 	},
	// 	success: function(data) {
	// 		data = JSON.parse(data);
	// 		$('#edit-image').attr('src', data.base64);
	// 		$('#progress').hide();
	// 		edited.r = data.r;
	// 		edited.g = data.g;
	// 		edited.b = data.b;
	// 		edited.width = parseInt(data.width);
	// 		edited.height = parseInt(data.height);
	// 	},
	// 	async: false
	// })
	
}

</script>