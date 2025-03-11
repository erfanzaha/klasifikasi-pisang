<?php
$uri  = $this->uri->segment(1);
$uri2 = $this->uri->segment(2);
$uri3 = $this->uri->segment(3);
if($uri == 'keranjang'):
?>
<div class="modal fade" id="modalEditItem">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <i class="icon-close"></i>
                </button>
            </div>
            <form method="post" id="form-edit-item">
                <div class="modal-body">
                    <input type="hidden" id="id_item" name="id_item">
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <label for="qty">Qty</label>
                            <input type="number" class="form-control" id="qty" name="qty" required
                                placeholder="Masukkan jumlah" min="1">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <label for="ukuran">Ukuran</label>
                            <select name="ukuran" id="ukuran" class="form-control" required></select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id="btnSaves">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php endif; ?>
<div class="modal fade" id="modalNewData">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Upload Bukti Pembayaran</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <i class="icon-close"></i>
                </button>
            </div>
            <form method="post" id="form-bukti-tf" enctype="multipart/form-data">
                <div class="modal-body">
                    <input type="hidden" id="id" name="id">
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <label>Gambar </label>
                            <input class="form-control" type="file" name="gambar" id="gambar" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id="btnSimpan">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- editor 
<div id="toolbox_panel" class="large-6 medium-5 columns end" style="margin-top: 0px;">
    <div id="modal_addimage" class="reveal-modal medium cipta-modal noselect" style="top:50px;" data-reveal=""
        data-options="close_on_background_click:false">
        <h2>Upload Gambar</h2>
        Format gambar yang dapat diproses adalah: <strong>.png</strong> dan <strong>.jpg</strong><br><br>
        <span class="medium-text">Mohon jangan mengupload gambar yang berbau SARA, kekerasan, atau pornografi.
            Sebelum dicetak, setiap desain akan melalui proses moderasi terlebih dahulu dan pihak Ciptaloka.com
            berhak untuk menolak desain yang kami anggap melanggar aturan tersebut.<br><br>
            Silahkan pilih gambar yang akan di upload :</span>
        <a class="close-reveal-modal">×</a>
        <div id="imagepanel">
            <div class="row">
                <div class="large-12 columns" id="addimage_widget_1">
                    <div id="addimage_upload_1">
                        <div class="qq-uploader-selector qq-uploader">
                            <div class="qq-upload-drop-area-selector qq-upload-drop-area" qq-hide-dropzone=""
                                style="display: none;">
                                <span>Drop files here to upload</span>
                            </div>
                            <span class="qq-drop-processing-selector qq-drop-processing qq-hide">
                                <span>Processing dropped files...</span>
                                <span class="qq-drop-processing-spinner-selector qq-drop-processing-spinner"></span>
                            </span>
                            <ul class="qq-upload-list-selector qq-upload-list"></ul>
                            <div class="row" style="margin-bottom:5px; margin-top:40px;">
                                <div class="large-6 medium-6 small-6 columns">
                                    <a class="qq-upload-button-selector qq-upload-button button tiny cipta-button-darkblue expand"
                                        style="border-radius: 0px; position: relative; overflow: hidden; direction: ltr;"
                                        id="button_choose_file">Pilih File...<input
                                            qq-button-id="4a33716a-1a52-44aa-af85-77bab14b0c9b" type="file"
                                            name="qqfile"
                                            style="position: absolute; right: 0px; top: 0px; font-family: Arial; font-size: 118px; margin: 0px; padding: 0px; cursor: pointer; opacity: 0; height: 100%;"></a>
                                </div>
                                <div class="large-6 medium-6 small-6 columns">
                                    <a class="button tiny cipta-button-lightgray close-reveal-modal expand"
                                        style="position:relative; top:0px; left:0px; line-height:normal;">Batal</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="modal_addtext" class="reveal-modal medium noselect"
        style="top: 50px; display: none; opacity: 1; visibility: hidden;" data-reveal="">
        <h2>Tambah Tulisan</h2>
        <a class="close-reveal-modal">×</a>
        <div id="textpanel">
            <div class="row">
                <div class="large-12 columns">
                    <label class="panel-label" id="addtext_widget_1">Teks:<br>
                        <input type="text" id="addtext_text_1" maxlength="100"></label>
                </div>
            </div>
            <div class="row">
                <div class="large-3 columns">
                    <label class="panel-label" id="addtext_widget_4">Kategori Font:<br>
                        <div class="select2-container" id="s2id_addtext_font_cat_1" style="width: 100%;"><a
                                href="javascript:void(0)" class="select2-choice" tabindex="-1"> <span
                                    class="select2-chosen" id="select2-chosen-2">Brush</span><abbr
                                    class="select2-search-choice-close"></abbr> <span class="select2-arrow"
                                    role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen2"
                                class="select2-offscreen"></label><input class="select2-focusser select2-offscreen"
                                type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-2"
                                id="s2id_autogen2"></div><select id="addtext_font_cat_1" tabindex="-1" title=""
                            style="display: none;">
                            <option value="popular">Populer</option>
                            <option value="brush" selected="selected">Brush</option>
                            <option value="decorative">Decorative</option>
                            <option value="grunge">Grunge</option>
                            <option value="film">Film</option>
                            <option value="funny">Funny</option>
                            <option value="games">Games</option>
                            <option value="gothic">Gothic</option>
                            <option value="handwriting">Handwriting</option>
                            <option value="foreign">Internasional</option>
                            <option value="modern">Modern</option>
                            <option value="poster">Poster</option>
                            <option value="retro">Retro</option>
                            <option value="round">Rounded</option>
                            <option value="scary">Seram</option>
                            <option value="sansserif">Sans Serif</option>
                            <option value="serif">Serif</option>
                            <option value="slabserif">Slab Serif</option>
                            <option value="script">Script</option>
                            <option value="stencil">Stencil</option>
                            <option value="sport">Sports</option>
                            <option value="techno">Techno</option>
                            <option value="typewriter">Typewriter</option>
                            <option value="western">Western</option>
                        </select>
                    </label><br>
                </div>
                <div class="large-6 columns">
                    <div id="addtext_widget_2">
                        <div class="panel-label" id="addtext_widget_2_label">Font:</div>
                        <div class="select2-container" id="s2id_addtext_font_1" style="width:100%;"><a
                                href="javascript:void(0)" class="select2-choice" tabindex="-1"> <span
                                    class="select2-chosen" id="select2-chosen-1">
                                    <div style="height:20px; margin-top:1px; margin-bottom:5px;"><img
                                            id="addtext_font_1_109_select2"
                                            src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/DBpMv.png"
                                            style="height:20px;"></div>
                                </span><abbr class="select2-search-choice-close"></abbr> <span class="select2-arrow"
                                    role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen1"
                                class="select2-offscreen"></label><input class="select2-focusser select2-offscreen"
                                type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-1"
                                id="s2id_autogen1"></div><select id="addtext_font_1" style="width: 100%; display: none;"
                            tabindex="-1" title="">
                            <option></option>
                            <option value="80">Braxton</option>
                            <option value="978">Dazzling Script</option>
                            <option value="980">Handscript</option>
                            <option value="974">Ink Brush</option>
                            <option value="109" selected="selected">Rancho</option>
                            <option value="61">Finger Paint</option>
                            <option value="16">Pacifico</option>
                            <option value="981">Ruby Brush</option>
                            <option value="463">Elegant</option>
                            <option value="30">Lobster</option>
                            <option value="76">Sprite Graffiti</option>
                            <option value="77">Sprite Shadow</option>
                        </select>
                    </div>
                </div>
                <div class="large-3 columns">
                    <label class="panel-label" id="addtext_widget_3">Warna:<br>
                        <input type="text" id="addtext_color_1" style="display: none;" value="#45818e">
                        <div class="sp-replacer sp-light">
                            <div class="sp-preview">
                                <div class="sp-preview-inner" style="background-color: rgb(69, 129, 142);"></div>
                            </div>
                            <div class="sp-dd">▼</div>
                        </div>
                    </label>
                </div>
            </div>
            <div class="row" style="margin-top:10px;">
                <div class="large-3 medium-4 small-4 large-offset-6 medium-offset-4 small-offset-4 columns">
                    <a href="#" id="addtext_button_2"
                        class="button expand tiny cipta-button-lightgray close-reveal-modal"
                        style="position:relative; top:0px; left:0px; line-height:normal">Batal</a>
                </div>
                <div class="large-3 medium-4 small-4 columns">
                    <a href="#" class="button expand cipta-button-darkblue tiny" id="addtext_button_1">Tambah Teks</a>
                </div>
            </div>
        </div>
    </div>

    <div id="modal_delete" class="reveal-modal medium cipta-modal noselect" style="top:50px;" data-reveal=""
        data-options="close_on_background_click:false">
        <h2 style="font-color:#99">Hapus</h2>
        <p>Apakah benar kamu mau menghapus objek ini ?</p>
        <a class="close-reveal-modal">×</a>
        <div id="deletepanel" style="text-align:center;"> </div>
        <div class="row" style="margin-top:20px;">
            <div class="large-6 medium-6 small-6 columns">
                <a id="modal_delete_no" href="#" class="button tiny expand cipta-button-lightgray">Batal</a>
            </div>
            <div class="large-6 medium-6 small-6 columns">
                <a id="modal_delete_yes" href="#" class="button tiny expand cipta-button-darkblue">Hapus</a>
            </div>
        </div>
    </div>

    <div id="modal_addclipart" class="reveal-modal xlarge cipta-modal noselect" data-reveal="" style="top:50px;">
        <a class="close-reveal-modal">×</a>
        <div id="clipartpanel">
            <h2 id="addclipart_caption">Tambah Clipart</h2>
            <div class="row">
                <div class="large-12 medium-12 small-12 columns medium-text">
                    Kategori:</div>
            </div>
            <div class="row">
                <div class="large-4 medium-5 small-5 columns panel-label" id="addclipart_widget_clipart_category">
                    <div class="select2-container" id="s2id_addclipart_clipart_cat_1" style="width: 100%;"><a
                            href="javascript:void(0)" class="select2-choice" tabindex="-1"> <span class="select2-chosen"
                                id="select2-chosen-16">Populer</span><abbr class="select2-search-choice-close"></abbr>
                            <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label
                            for="s2id_autogen16" class="select2-offscreen"></label><input
                            class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button"
                            aria-labelledby="select2-chosen-16" id="s2id_autogen16">
                        <div class="select2-drop select2-display-none">
                            <div class="select2-search select2-search-hidden select2-offscreen"> <label
                                    for="s2id_autogen16_search" class="select2-offscreen"></label> <input type="text"
                                    autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false"
                                    class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list"
                                    aria-owns="select2-results-16" id="s2id_autogen16_search" placeholder=""> </div>
                            <ul class="select2-results" role="listbox" id="select2-results-16"> </ul>
                        </div>
                    </div><select id="addclipart_clipart_cat_1" tabindex="-1" title="" style="display: none;">
                        <option selected="selected" value="popular">Populer</option>
                        <option value="alfabet">Alfabet &amp; Angka</option>
                        <option value="bentuk,simbol">Bentuk &amp; Simbol</option>
                        <option value="binatang">Binatang</option>
                        <option value="event">Event / Acara</option>
                        <option value="fashion">Fashion</option>
                        <option value="indonesia">Indonesia</option>
                        <option value="internasional">Internasional</option>
                        <option value="komik">Komik</option>
                        <option value="lucu">Lucu</option>
                        <option value="makanan,minuman">Makanan &amp; Minuman</option>
                        <option value="militer">Militer</option>
                        <option value="musik">Musik</option>
                        <option value="olahraga">Olah Raga</option>
                        <option value="kerja,pekerjaan">Pekerjaan</option>
                        <option value="sains,science,scifi">Sains &amp; Fiksi Sains</option>
                        <option value="sekolah">Sekolah</option>
                        <option value="spiritual">Spiritual</option>
                        <option value="transportasi">Transportasi</option>
                        <option value="universitas">Universitas</option>
                    </select>
                </div>
                <div class="large-4 medium-4 small-4 large-offset-3 medium-offset-1 small-offset-1 columns"
                    style="padding-right:0px;">
                    <input maxlength="100" style="margin:0px;" type="text" id="addclipart_search_1"
                        placeholder="Cari Clipart...">
                </div>
                <div class="large-1 medium-2 small-2 end columns" style="padding-left:0px;">
                    <a id="addclipart_search_clipart" class="button secondary postfix"
                        style="margin-left:-4px; padding-bottom:5px; border-top-right-radius:5px; border-bottom-right-radius:5px; margin-bottom:0px;"><i
                            class="icon-search fs0"></i></a>
                </div>
            </div>
            <div class="row small-text" style="margin-top:0px;">
                <div class="large-12 columns" id="addclipart_widget_1"
                    style="width: 100%; height: 375px; overflow-y: auto;">
                    <ul class="small-block-grid-4 medium-block-grid-6 large-block-grid-8" style="margin-top:20px;"
                        id="addclipart_clipart_1">
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_135"
                                data-id="135" src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/MXNVb-small.jpg"
                                width="125"><br>star</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_126"
                                data-id="126" src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/VOEDn-small.jpg"
                                width="125"><br>segitiga</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_120"
                                data-id="120" src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/nd1qw-small.jpg"
                                width="125"><br>full circle</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_143"
                                data-id="143" src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/RjxWV-small.jpg"
                                width="125"><br>hati 2</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_125"
                                data-id="125" src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/bQyyd-small.jpg"
                                width="125"><br>filled rectangle</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_4136"
                                data-id="4136"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/LZ3J1vRRpxYM4oXqGzPV-small.jpg"
                                width="125"><br>Panda face 1</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_2952"
                                data-id="2952"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/gpBowQoQpY35jYeNwBaO-small.jpg"
                                width="125"><br>flat black monkey</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_2765"
                                data-id="2765"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/5d3p4VyGy3BPoYeNwBaO-small.jpg"
                                width="125"><br>not G 2</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_2329"
                                data-id="2329"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/ZjnwNXK41l69mYeNwBaO-small.jpg"
                                width="125"><br>Basketball Ring</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_2330"
                                data-id="2330"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/2E54PdZOqlRPbYeNwBaO-small.jpg"
                                width="125"><br>Billiard Ball</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_2067"
                                data-id="2067"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/mmRwPgOqmPyN9YeNwBaO-small.jpg"
                                width="125"><br>Bendera Indonesia</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_2042"
                                data-id="2042"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/EaAQJWPdxLeWRYeNwBaO-small.jpg"
                                width="125"><br>Comic Speech Bubble set 2</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_2034"
                                data-id="2034"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/WDoyOLb1WqNalYeNwBaO-small.jpg"
                                width="125"><br>Comic Speech Bubble set 2</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_1986"
                                data-id="1986"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/qYVpVzlDMMQYMYeNwBaO-small.jpg"
                                width="125"><br>Comic Speech Bubble set 1</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_1992"
                                data-id="1992"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/qYVpVzl6OMXKKYeNwBaO-small.jpg"
                                width="125"><br>Comic Speech Bubble set 1</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_1996"
                                data-id="1996"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/qYVpVzlNqmEzmYeNwBaO-small.jpg"
                                width="125"><br>Comic Speech Bubble set 1</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_1917"
                                data-id="1917"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/JQzpJgbdZqvAAYeNwBaO-small.jpg"
                                width="125"><br>Bola Sepak 5</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_1862"
                                data-id="1862"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/3rAwdBGVqMpQyYeNwBaO-small.jpg"
                                width="125"><br>Tapak Sepatu Pelangi</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_1849"
                                data-id="1849"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/GzAdmPokaWN2G7YeNwBaO-small.jpg"
                                width="125"><br>Bola Tenis 2</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_1838"
                                data-id="1838"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/RW6q14B7ElQ6JzYeNwBaO-small.jpg"
                                width="125"><br>Dadu 1</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_1837"
                                data-id="1837"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/RW6q1va73KN1ElYeNwBaO-small.jpg"
                                width="125"><br>Rubik's Cube</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_1832"
                                data-id="1832"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/GzAdvMW0OZMZ9AYeNwBaO-small.jpg"
                                width="125"><br>Bola Basket 1</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_1830"
                                data-id="1830"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/VK6mY350DJQAXBYeNwBaO-small.jpg"
                                width="125"><br>Rainbow Running Man</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_1828"
                                data-id="1828" src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/ROJN5-small.jpg"
                                width="125"><br>Bola Sepak 1</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_1288"
                                data-id="1288" src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/Rm4z-small.jpg"
                                width="125"><br>panda 1</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_1289"
                                data-id="1289" src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/ZVeem-small.jpg"
                                width="125"><br>panda 2</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_1217"
                                data-id="1217" src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/DKYLM-small.jpg"
                                width="125"><br>lumba lumba 35</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_550"
                                data-id="550" src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/DPWrE-small.jpg"
                                width="125"><br>infinity 8</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_552"
                                data-id="552" src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/XnLp-small.jpg"
                                width="125"><br>infinity 10</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_428"
                                data-id="428" src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/NQz9V-small.jpg"
                                width="125"><br>arrow 28</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_311"
                                data-id="311" src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/qddnJ-small.jpg"
                                width="125"><br>jejak telapak tangan </li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_318"
                                data-id="318" src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/yn3YB-small.jpg"
                                width="125"><br>jejak kaki 2</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_300"
                                data-id="300" src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/OPJZJ-small.jpg"
                                width="125"><br>sidik jari 5</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_305"
                                data-id="305" src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/zGqle-small.jpg"
                                width="125"><br>jejak telapak tangan 4</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_306"
                                data-id="306" src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/wwpJW-small.jpg"
                                width="125"><br>jejak telapak tangan 2</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_183"
                                data-id="183" src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/DQXqB-small.jpg"
                                width="125"><br>bintang 31</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_167"
                                data-id="167" src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/ndy4j-small.jpg"
                                width="125"><br>bintang 15</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_168"
                                data-id="168" src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/4bWWA-small.jpg"
                                width="125"><br>bintang 16</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_162"
                                data-id="162" src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/GKVjg-small.jpg"
                                width="125"><br>bintang 10</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_153"
                                data-id="153" src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/yyYE-small.jpg"
                                width="125"><br>bintang 1</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_144"
                                data-id="144" src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/WnaVb-small.jpg"
                                width="125"><br>hati 3</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_141"
                                data-id="141" src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/EZ1Kz-small.jpg"
                                width="125"><br>hexagram</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_127"
                                data-id="127" src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/A6ge-small.jpg"
                                width="125"><br>pentagon</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_128"
                                data-id="128" src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/3pAMQ-small.jpg"
                                width="125"><br>hexagon</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_130"
                                data-id="130" src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/BywA3-small.jpg"
                                width="125"><br>octagon</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_25180"
                                data-id="25180"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/VK9VJGvBdqQaQapQEx2V-small.jpg"
                                width="125"><br>wajah</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_25171"
                                data-id="25171"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/5dPpMYoEwBMwoapQEx2V-small.jpg"
                                width="125"><br>wajah panda</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_25172"
                                data-id="25172"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/5dPpMYoOaPKgB1dYeb1l-small.jpg"
                                width="125"><br>wajah panda</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_25170"
                                data-id="25170"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/lxW61LKVzyEv9GrQoJrZ-small.jpg"
                                width="125"><br>wajah</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_24836"
                                data-id="24836"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/zQ9GlVYRGX94Qgw9xQGq-small.jpg"
                                width="125"><br>emoticon</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_24837"
                                data-id="24837"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/zQ9GlVYJyj1zpgjYJpQ2-small.jpg"
                                width="125"><br>emoticon</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_24841"
                                data-id="24841"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/zQ9GlVYqYy5zqgx4Vzv2-small.jpg"
                                width="125"><br>emoticon</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_24832"
                                data-id="24832"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/pxdQJyBPO6qMMgx4Vzv2-small.jpg"
                                width="125"><br>emoticon</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_24834"
                                data-id="24834"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/pxdQJyByVWv5Dw2AmNn-small.jpg"
                                width="125"><br>emoticon</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_24835"
                                data-id="24835"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/pxdQJyBJqZBpg4BxAbQ-small.jpg"
                                width="125"><br>emoticon</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_21025"
                                data-id="21025"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/6d1PVmooNbG2pG2ReWno-small.jpg"
                                width="125"><br>busur panah</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_7410"
                                data-id="7410"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/EaJ4p4zLnBmpp6KMaAg-small.jpg"
                                width="125"><br>dog </li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_7219"
                                data-id="7219"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/px1OrogVd5Bx5noPbwnK-small.jpg"
                                width="125"><br>dog </li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_5435"
                                data-id="5435"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/LZ3EQL52X3JEjVM5x5xe-small.jpg"
                                width="125"><br>draw 10</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_5440"
                                data-id="5440"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/LZ3EQL5zR5jYYgZWoA1-small.jpg"
                                width="125"><br>draw 15</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_5444"
                                data-id="5444"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/LZ3EQL5pRg1GayoAjybJ-small.jpg"
                                width="125"><br>draw 19</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_4142"
                                data-id="4142"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/qYZyWJqZqeEm5zyG5org-small.jpg"
                                width="125"><br>Panda face 2</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_3211"
                                data-id="3211"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/e2gKB3Gd1PydBYeNwBaO-small.jpg"
                                width="125"><br>coffee 77</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_3212"
                                data-id="3212"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/e2gKB3G1gGLYeNwBaO-small.jpg"
                                width="125"><br>coffee 78</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_3135"
                                data-id="3135"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/5d3RpqyGGEQnoYeNwBaO-small.jpg"
                                width="125"><br>Comic Eye 7</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_3016"
                                data-id="3016"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/zQaWM5eBY4OGpYeNwBaO-small.jpg"
                                width="125"><br>owl sil 1</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_3011"
                                data-id="3011"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/AGrnzwOZVNVdZYeNwBaO-small.jpg"
                                width="125"><br>elephant sil 1</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_2936"
                                data-id="2936"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/lx1NRyNBOlY9vYeNwBaO-small.jpg"
                                width="125"><br>wayang 7</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_2937"
                                data-id="2937"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/AGrndzDxEEz9MYeNwBaO-small.jpg"
                                width="125"><br>wayang 8</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_2938"
                                data-id="2938"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/AGrndzDpeje9XYeNwBaO-small.jpg"
                                width="125"><br>wayang 9</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_2939"
                                data-id="2939"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/AGrndzDjVYpRQYeNwBaO-small.jpg"
                                width="125"><br>wayang 10</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_2941"
                                data-id="2941"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/AGrndzDOrZ6G2YeNwBaO-small.jpg"
                                width="125"><br>wayang 12</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_2942"
                                data-id="2942"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/AGrndzD6GMYmpYeNwBaO-small.jpg"
                                width="125"><br>wayang 13</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_2943"
                                data-id="2943"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/AGrndzDg66DW2YeNwBaO-small.jpg"
                                width="125"><br>wayang 14</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_2758"
                                data-id="2758"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/5d3p4Vyp3vLjyYeNwBaO-small.jpg"
                                width="125"><br>headphones</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_2759"
                                data-id="2759"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/5d3p4VyGGY5z1YeNwBaO-small.jpg"
                                width="125"><br>not G</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_2567"
                                data-id="2567"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/Ea3zLNlnrOXBnYeNwBaO-small.jpg"
                                width="125"><br>sarang laba-laba</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_2560"
                                data-id="2560"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/wDRW4xWmW1VjaYeNwBaO-small.jpg"
                                width="125"><br>funny ghost</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_2432"
                                data-id="2432"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/wDRm944QDqgVaYeNwBaO-small.jpg"
                                width="125"><br>Basketball 52</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_2440"
                                data-id="2440"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/wDRm944XwV9QWYeNwBaO-small.jpg"
                                width="125"><br>Basketball 60</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_2333"
                                data-id="2333"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/2E54PdZgmPXM2YeNwBaO-small.jpg"
                                width="125"><br>Bowling Pin</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_2334"
                                data-id="2334"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/2E54PdZAygm42YeNwBaO-small.jpg"
                                width="125"><br>Football Shoes</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_1987"
                                data-id="1987"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/qYVpVzlRb4DXvYeNwBaO-small.jpg"
                                width="125"><br>Comic Speech Bubble set 1</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_1988"
                                data-id="1988"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/qYVpVzl2YL49MYeNwBaO-small.jpg"
                                width="125"><br>Comic Speech Bubble set 1</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_1989"
                                data-id="1989"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/qYVpVzlrvXxA9YeNwBaO-small.jpg"
                                width="125"><br>Comic Speech Bubble set 1</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_1993"
                                data-id="1993"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/qYVpVzl2ONPgOYeNwBaO-small.jpg"
                                width="125"><br>Comic Speech Bubble set 1</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_1857"
                                data-id="1857"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/NN6XX9moyqDqqYeNwBaO-small.jpg"
                                width="125"><br>Kartu As Hati</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_1854"
                                data-id="1854"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/DxAyynrvpgbYvYeNwBaO-small.jpg"
                                width="125"><br>Kartu As Keriting</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_1855"
                                data-id="1855"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/DxAyynrZxAwVGYeNwBaO-small.jpg"
                                width="125"><br>Kartu As Sekop</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_1856"
                                data-id="1856"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/DxAyynrAO3nrAYeNwBaO-small.jpg"
                                width="125"><br>Kartu As Wajik</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_1827"
                                data-id="1827" src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/e4jNM-small.jpg"
                                width="125"><br>Basketball Outline</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_1826"
                                data-id="1826" src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/nRYXK-small.jpg"
                                width="125"><br>Basketball Jump</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_1759"
                                data-id="1759" src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/pyMey-small.jpg"
                                width="125"><br>naga 52</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_1541"
                                data-id="1541" src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/4aKpo-small.jpg"
                                width="125"><br>air balloon 1</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_1290"
                                data-id="1290" src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/zQerK-small.jpg"
                                width="125"><br>panda 3</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_1291"
                                data-id="1291" src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/pQoOg-small.jpg"
                                width="125"><br>panda 4</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_1292"
                                data-id="1292" src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/pjme6-small.jpg"
                                width="125"><br>panda 5</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_1293"
                                data-id="1293" src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/QPmOe-small.jpg"
                                width="125"><br>panda 6</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_1295"
                                data-id="1295" src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/Xe4zz-small.jpg"
                                width="125"><br>panda 8</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_1190"
                                data-id="1190" src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/Lo2G9-small.jpg"
                                width="125"><br>lumba lumba 8</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_593"
                                data-id="593" src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/ZxzNn-small.jpg"
                                width="125"><br>hand 29</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_594"
                                data-id="594" src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/zNaz3-small.jpg"
                                width="125"><br>hand 30</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_598"
                                data-id="598" src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/1rnqK-small.jpg"
                                width="125"><br>hand 34</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_599"
                                data-id="599" src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/XwJpx-small.jpg"
                                width="125"><br>hand 35</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_571"
                                data-id="571" src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/O1pnJ-small.jpg"
                                width="125"><br>hand 7</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_573"
                                data-id="573" src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/nvAxK-small.jpg"
                                width="125"><br>hand 9</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_548"
                                data-id="548" src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/pmmP-small.jpg"
                                width="125"><br>infinity 6</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_557"
                                data-id="557" src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/QpM2e-small.jpg"
                                width="125"><br>infinity 15</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_448"
                                data-id="448" src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/RjgPV-small.jpg"
                                width="125"><br>arrow 48</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_429"
                                data-id="429" src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/WQYEA-small.jpg"
                                width="125"><br>arrow 29</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_435"
                                data-id="435" src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/zXmyw-small.jpg"
                                width="125"><br>arrow 35</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_407"
                                data-id="407" src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/RWrYz-small.jpg"
                                width="125"><br>arrow 7</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_410"
                                data-id="410" src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/A49vM-small.jpg"
                                width="125"><br>arrow 10</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_417"
                                data-id="417" src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/oajzE-small.jpg"
                                width="125"><br>arrow 17</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_418"
                                data-id="418" src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/23nEy-small.jpg"
                                width="125"><br>arrow 18</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_401"
                                data-id="401" src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/RZdXp-small.jpg"
                                width="125"><br>arrow 1</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_373"
                                data-id="373" src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/6O9Ea-small.jpg"
                                width="125"><br>musik 35</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_307"
                                data-id="307" src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/rzga9-small.jpg"
                                width="125"><br>jejak telapak tangan 3</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_310"
                                data-id="310" src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/9EPAl-small.jpg"
                                width="125"><br>sidik jari </li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_301"
                                data-id="301" src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/QDOBz-small.jpg"
                                width="125"><br>sidik jari 4</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_302"
                                data-id="302" src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/lEGRx-small.jpg"
                                width="125"><br>sidik jari 3</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_303"
                                data-id="303" src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/Y539O-small.jpg"
                                width="125"><br>sidik jari 2</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_304"
                                data-id="304" src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/2Zo2q-small.jpg"
                                width="125"><br>jejak hewan </li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_208"
                                data-id="208" src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/WG24o-small.jpg"
                                width="125"><br>jejak ban mobil 10</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_209"
                                data-id="209" src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/ab9qr-small.jpg"
                                width="125"><br>jejak ban mobil 11</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_174"
                                data-id="174" src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/weRO-small.jpg"
                                width="125"><br>bintang 22</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_149"
                                data-id="149" src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/nv1Qj-small.jpg"
                                width="125"><br>hati sayap bintang</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_150"
                                data-id="150" src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/Azo1q-small.jpg"
                                width="125"><br>hati strip</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_151"
                                data-id="151" src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/awMN2-small.jpg"
                                width="125"><br>hati strip 2</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_137"
                                data-id="137" src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/R4vDv-small.jpg"
                                width="125"><br>hati polkadot</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_31174"
                                data-id="31174"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/gpYvzmvZDGmLLZjrX9NK-small.jpg"
                                width="125"><br>militer</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_31175"
                                data-id="31175"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/gpYvzmvOB6MaOxOwpPgM-small.jpg"
                                width="125"><br>militer</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_31177"
                                data-id="31177"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/gpYvzmvZEW9EMjVBBDYM-small.jpg"
                                width="125"><br>militer</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_11095"
                                data-id="11095"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/AGK5YGqm6wxKOy9yb2qe-small.jpg"
                                width="125"><br>hat chef</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_11096"
                                data-id="11096"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/AGK5YGqbrB6QLxZneBpY-small.jpg"
                                width="125"><br>hat chef</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_11047"
                                data-id="11047"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/5dj5z6wZDKeNxgMAwMlj-small.jpg"
                                width="125"><br>chef</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_10897"
                                data-id="10897"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/2EaMWwMgloN3qy9yb2qe-small.jpg"
                                width="125"><br>chef</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_10896"
                                data-id="10896"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/5dj5pooGrZOwggMAwMlj-small.jpg"
                                width="125"><br>chef</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_10793"
                                data-id="10793"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/mmO6KWan6RjaPxZneBpY-small.jpg"
                                width="125"><br>chef</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_10787"
                                data-id="10787"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/9dyeVK2NwRwxQgMAwMlj-small.jpg"
                                width="125"><br>chef</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_10786"
                                data-id="10786"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/aqKAMmBRP6wNQgMAwMlj-small.jpg"
                                width="125"><br>chef</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_10470"
                                data-id="10470"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/WDv93JP1RyGDVAzmWzpD-small.jpg"
                                width="125"><br>dokter</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_10457"
                                data-id="10457"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/yXyreAxjQy1MVzgB9Onw-small.jpg"
                                width="125"><br>medis</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_10460"
                                data-id="10460"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/yXyreAxbAJZdlxerKOJ-small.jpg"
                                width="125"><br>medis</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_10462"
                                data-id="10462"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/yXyreAx3mYQLEMLenLMb-small.jpg"
                                width="125"><br>medis</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_10446"
                                data-id="10446"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/EaMEpXX9KqydWAzmWzpD-small.jpg"
                                width="125"><br>dokter</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_10430"
                                data-id="10430"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/mmOlz212EWZXjJ5lQNAp-small.jpg"
                                width="125"><br>dokter</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_8652"
                                data-id="8652"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/LZBpBeRLbe4jmRzgnwK1-small.jpg"
                                width="125"><br>British Crown - Keep Calm</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_7408"
                                data-id="7408"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/EaJ4p4zROGKe5noPbwnK-small.jpg"
                                width="125"><br>dog </li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_7409"
                                data-id="7409"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/EaJ4p4zxRxBG15n5K9ox-small.jpg"
                                width="125"><br>dog </li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_7406"
                                data-id="7406"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/9d2nJ65bojn59wVVo2L1-small.jpg"
                                width="125"><br>dog</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_7351"
                                data-id="7351"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/NNLMJWwLWWZP5noPbwnK-small.jpg"
                                width="125"><br>dog</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_7352"
                                data-id="7352"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/NNLMJWwdORnlY5n5K9ox-small.jpg"
                                width="125"><br>dog</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_7353"
                                data-id="7353"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/NNLMJWw1py4blp6KMaAg-small.jpg"
                                width="125"><br>dog</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_7354"
                                data-id="7354"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/NNLMJWwaGxLvawVVo2L1-small.jpg"
                                width="125"><br>dog</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_7337"
                                data-id="7337"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/6dQOxOovazXQ1dgqxgyg-small.jpg"
                                width="125"><br>dog</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_7251"
                                data-id="7251"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/xEN9eBJYeJYMgnoPbwnK-small.jpg"
                                width="125"><br>dog</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_7252"
                                data-id="7252"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/xEN9eBJeG6VwX5n5K9ox-small.jpg"
                                width="125"><br>dog</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_7253"
                                data-id="7253"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/xEN9eBJQ4X4Y5p6KMaAg-small.jpg"
                                width="125"><br>dog</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_7254"
                                data-id="7254"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/xEN9eBJP2pONGwVVo2L1-small.jpg"
                                width="125"><br>dog</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_7247"
                                data-id="7247"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/aqVwLaG5OG5jXnoPbwnK-small.jpg"
                                width="125"><br>dog</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_7248"
                                data-id="7248"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/aqVwLaGv3egGJ5n5K9ox-small.jpg"
                                width="125"><br>dog</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_7249"
                                data-id="7249"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/aqVwLaGrwQwq5p6KMaAg-small.jpg"
                                width="125"><br>dog</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_7250"
                                data-id="7250"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/aqVwLaGPv4mmMwVVo2L1-small.jpg"
                                width="125"><br>dog</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_7226"
                                data-id="7226"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/DxjZn1rRANwQVwVVo2L1-small.jpg"
                                width="125"><br>dog</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_7225"
                                data-id="7225"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/xEN9oL1gYomVwVVo2L1-small.jpg"
                                width="125"><br>dog</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_7224"
                                data-id="7224"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/WDY192mpbrDDywVVo2L1-small.jpg"
                                width="125"><br>dog</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_7223"
                                data-id="7223"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/3rXpmqy2NmXayJXEY32l-small.jpg"
                                width="125"><br>dog</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_7220"
                                data-id="7220"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/px1OrogrJBKKQ5n5K9ox-small.jpg"
                                width="125"><br>dog </li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_7221"
                                data-id="7221"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/px1Orogy5a3wKp6KMaAg-small.jpg"
                                width="125"><br>dog </li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_7222"
                                data-id="7222"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/px1Orog1zWx65wVVo2L1-small.jpg"
                                width="125"><br>dog </li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_7215"
                                data-id="7215"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/VKwroxeBWdpnvnoPbwnK-small.jpg"
                                width="125"><br>dog</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_7216"
                                data-id="7216"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/VKwroxeN4JopB5n5K9ox-small.jpg"
                                width="125"><br>dog</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_7217"
                                data-id="7217"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/VKwroxeOjzQDQp6KMaAg-small.jpg"
                                width="125"><br>dog</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_7218"
                                data-id="7218"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/VKwroxeQrrjBawVVo2L1-small.jpg"
                                width="125"><br>dog</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_5462"
                                data-id="5462"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/rg2MyAWbdbpEm5z2oEGb-small.jpg"
                                width="125"><br>Current Apple Logo</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_5110"
                                data-id="5110"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/Ea3QvBzG5LE2o5n5K9ox-small.jpg"
                                width="125"><br>dog 2</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_4737"
                                data-id="4737"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/Ea3bzpooDJKKQqr3QjLJ-small.jpg"
                                width="125"><br>meme 26</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_4738"
                                data-id="4738"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/Ea3bzpolV4wGJl92BBKo-small.jpg"
                                width="125"><br>meme 27</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_4740"
                                data-id="4740"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/Ea3bzpoZ454dL5Gpv26o-small.jpg"
                                width="125"><br>meme 29</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_4741"
                                data-id="4741"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/Ea3bzpo5NEAOoAnmQLaB-small.jpg"
                                width="125"><br>meme 30</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_4716"
                                data-id="4716"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/9d3GEJDy4MmRnOAXNOgA-small.jpg"
                                width="125"><br>meme 5</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_4718"
                                data-id="4718"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/qYZ4De3zNaNZ1yr6Z6aQ-small.jpg"
                                width="125"><br>meme 7</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_4720"
                                data-id="4720"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/qYZ4De3JrBqQp1PZDqM5-small.jpg"
                                width="125"><br>meme 9</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_4721"
                                data-id="4721"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/qYZ4De3YaW36QPzp96rG-small.jpg"
                                width="125"><br>meme 10</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_4722"
                                data-id="4722"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/qYZ4De3YLj962Zqom9DG-small.jpg"
                                width="125"><br>meme 11</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_4724"
                                data-id="4724"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/qYZ4De3aW55eaZB2ZoNx-small.jpg"
                                width="125"><br>meme 13</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_4725"
                                data-id="4725"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/qYZ4De3P1ojnGZxbNadx-small.jpg"
                                width="125"><br>meme 14</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_4726"
                                data-id="4726"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/qYZ4De3BWxqYKZ1vLoZn-small.jpg"
                                width="125"><br>meme 15</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_4728"
                                data-id="4728"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/qYZ4De3249PGyjojmd6a-small.jpg"
                                width="125"><br>meme 17</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_4729"
                                data-id="4729"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/qYZ4De3GYOWvEJx3ogvl-small.jpg"
                                width="125"><br>meme 18</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_4730"
                                data-id="4730"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/qYZ4De3dzjKA63mbmmLX-small.jpg"
                                width="125"><br>meme 19</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_4714"
                                data-id="4714"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/9d3GEJD6XaXDKzNGadK2-small.jpg"
                                width="125"><br>meme 3</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_4543"
                                data-id="4543"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/RWwxZKvONWXBPrXPNvw-small.jpg"
                                width="125"><br>Android logo</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_4541"
                                data-id="4541"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/VKpjOxxOAqWyaj3jr2j3-small.jpg"
                                width="125"><br>android head</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_4538"
                                data-id="4538"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/Op3GBGOWA5l52L53qxo5-small.jpg"
                                width="125"><br>Aqua Apple Logo</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_4537"
                                data-id="4537"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/pxw2M265pdZ3oRMyjWWQ-small.jpg"
                                width="125"><br>Old Apple Logo</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_4138"
                                data-id="4138"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/LZ3J1vRQNxD1NjbqOZaD-small.jpg"
                                width="125"><br>Panda face 3</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_4139"
                                data-id="4139"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/LZ3J1vRg1l2Q2MywVXXV-small.jpg"
                                width="125"><br>Panda face 4</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_4140"
                                data-id="4140"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/LZ3J1vRyqqBaJBddoDGQ-small.jpg"
                                width="125"><br>Panda face 5</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_4051"
                                data-id="4051"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/NNzv5PB1ajegwyZ6qoDQ-small.jpg"
                                width="125"><br>kamera 31</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_4052"
                                data-id="4052"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/NNzv5PB6eBmvoyvnRqM3-small.jpg"
                                width="125"><br>kamera 32</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_4053"
                                data-id="4053"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/NNzv5PBK52J6jOr2XLga-small.jpg"
                                width="125"><br>adjust</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_4054"
                                data-id="4054"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/NNzv5PB1PDmQLMmA4BN1-small.jpg"
                                width="125"><br>crop</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_4055"
                                data-id="4055"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/NNzv5PBn1jzwZqqnyAM-small.jpg"
                                width="125"><br>film strip</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_4056"
                                data-id="4056"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/NNzv5PB6P16ap1P2Oeqw-small.jpg"
                                width="125"><br>contrast</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_4057"
                                data-id="4057"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/NNzv5PBMDjdANadWpRXQ-small.jpg"
                                width="125"><br>kamera 33</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_4042"
                                data-id="4042"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/2E5dxmZxv5aoJGRv4q4a-small.jpg"
                                width="125"><br>Foto 20</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_4043"
                                data-id="4043"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/2E5dxmZlNVxGW11JNo3w-small.jpg"
                                width="125"><br>Foto 21</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_4044"
                                data-id="4044"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/2E5dxmZvOP43w1NxQD1w-small.jpg"
                                width="125"><br>Foto Potret</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_4045"
                                data-id="4045"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/2E5dxmZeaDYQX1QQx3YL-small.jpg"
                                width="125"><br>Foto pemandangan</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_4046"
                                data-id="4046"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/2E5dxmZoLjG6v9r5yNx4-small.jpg"
                                width="125"><br>Fokus</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_4047"
                                data-id="4047"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/2E5dxmZ14WAeVbdO6yYL-small.jpg"
                                width="125"><br>kamera 30</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_4048"
                                data-id="4048"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/2E5dxmZyRexv3rVOGjqO-small.jpg"
                                width="125"><br>film</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_4049"
                                data-id="4049"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/2E5dxmZWzJZPbBoXPnYK-small.jpg"
                                width="125"><br>brightness</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_4004"
                                data-id="4004"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/e2gPaBJpqmwYQEWPy2Bx-small.jpg"
                                width="125"><br>Kamera 3</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_4005"
                                data-id="4005"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/e2gPaBJmmXOl14omgdwA-small.jpg"
                                width="125"><br>Kamera 4</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_4006"
                                data-id="4006"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/e2gPaBJoDnGM9nq4D5Wo-small.jpg"
                                width="125"><br>Kamera 5</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_4007"
                                data-id="4007"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/e2gPaBJ6yBNJXDLd2QzB-small.jpg"
                                width="125"><br>Kamera 6</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_4008"
                                data-id="4008"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/e2gPaBJaYRd5GnEJL5Bg-small.jpg"
                                width="125"><br>Kamera 7</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_4009"
                                data-id="4009"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/e2gPaBJVKPDK5EZredmG-small.jpg"
                                width="125"><br>Kamera 8</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_4010"
                                data-id="4010"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/e2gPaBJ42ZdJY4eow51-small.jpg"
                                width="125"><br>Kamera 9</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_4011"
                                data-id="4011"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/e2gPaBJzWDmw1NPmdA6e-small.jpg"
                                width="125"><br>Kamera 20</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_4001"
                                data-id="4001"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/5d3L62w6RnlmaXDRNdga-small.jpg"
                                width="125"><br>Kamera 10</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_4002"
                                data-id="4002"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/5d3L62wyoxlDenyBv646-small.jpg"
                                width="125"><br>Kamera 11</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_3422"
                                data-id="3422"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/odQA1YMPZeABPYeNwBaO-small.jpg"
                                width="125"><br>grunge splash 43</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_3423"
                                data-id="3423"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/rg21MxV5ryKJyYeNwBaO-small.jpg"
                                width="125"><br>grunge splash 44</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_3424"
                                data-id="3424"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/rg21MxVzyKYq3YeNwBaO-small.jpg"
                                width="125"><br>grunge splash 45</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_3425"
                                data-id="3425"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/rg21MxV5QxlLxYeNwBaO-small.jpg"
                                width="125"><br>grunge splash 46</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_3419"
                                data-id="3419"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/odQA1YMG6JlpgYeNwBaO-small.jpg"
                                width="125"><br>grunge splash 40</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_3420"
                                data-id="3420"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/odQA1YML1QzARYeNwBaO-small.jpg"
                                width="125"><br>grunge splash 41</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_3421"
                                data-id="3421"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/odQA1YMJOQ211YeNwBaO-small.jpg"
                                width="125"><br>grunge splash 42</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_3389"
                                data-id="3389"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/M23QGRDm3JapJYeNwBaO-small.jpg"
                                width="125"><br>grunge splash 10</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_3390"
                                data-id="3390"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/M23QGRD2RQaLyYeNwBaO-small.jpg"
                                width="125"><br>grunge splash 11</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_3380"
                                data-id="3380"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/5d3zeloXzgMRpYeNwBaO-small.jpg"
                                width="125"><br>grunge splash 1</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_3381"
                                data-id="3381"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/5d3zelo6Y91NKYeNwBaO-small.jpg"
                                width="125"><br>grunge splash 2</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_3382"
                                data-id="3382"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/5d3zelon2llpdYeNwBaO-small.jpg"
                                width="125"><br>grunge splash 3</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_3383"
                                data-id="3383"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/5d3zeloj9o9DVYeNwBaO-small.jpg"
                                width="125"><br>grunge splash 4</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_3284"
                                data-id="3284"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/1PXNVbEjKjb5aYeNwBaO-small.jpg"
                                width="125"><br>splash 32</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_3285"
                                data-id="3285"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/1PXNVbEEBOyLPYeNwBaO-small.jpg"
                                width="125"><br>splash 33</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_3277"
                                data-id="3277"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/Kw3bdBJewrOBqYeNwBaO-small.jpg"
                                width="125"><br>splash 25</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_3259"
                                data-id="3259"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/4L3GyXmooBbopYeNwBaO-small.jpg"
                                width="125"><br>splash 7</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_3260"
                                data-id="3260"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/4L3GyXmRWPRwQYeNwBaO-small.jpg"
                                width="125"><br>splash 8</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_3261"
                                data-id="3261"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/4L3GyXma3mn29YeNwBaO-small.jpg"
                                width="125"><br>splash 9</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_3248"
                                data-id="3248"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/VKpMGlNE4REdXYeNwBaO-small.jpg"
                                width="125"><br>coffee 88</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_3251"
                                data-id="3251"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/VKpMGlNG6OZweYeNwBaO-small.jpg"
                                width="125"><br>coffee 91</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_3252"
                                data-id="3252"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/VKpMGlNJQdmoEYeNwBaO-small.jpg"
                                width="125"><br>coffee 92</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_3238"
                                data-id="3238"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/aqvMyQQwJAK4PYeNwBaO-small.jpg"
                                width="125"><br>coffee 55</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_3243"
                                data-id="3243"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/aqvMyQQNmwLeNYeNwBaO-small.jpg"
                                width="125"><br>coffee 60</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_3221"
                                data-id="3221"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/e2gKB3GPvVgBJYeNwBaO-small.jpg"
                                width="125"><br>coffee 64</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_3222"
                                data-id="3222"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/e2gKB3GbzDNpLYeNwBaO-small.jpg"
                                width="125"><br>coffee 65</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_3182"
                                data-id="3182"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/4L3GJ129rDjNOYeNwBaO-small.jpg"
                                width="125"><br>coffee 22</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_3184"
                                data-id="3184"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/4L3GJ12RAA9D5YeNwBaO-small.jpg"
                                width="125"><br>coffee 24</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_3150"
                                data-id="3150"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/NNz4MXRxrAgpMYeNwBaO-small.jpg"
                                width="125"><br>Speech Bubble 3</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_3151"
                                data-id="3151"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/pxw3zLXZELYB5YeNwBaO-small.jpg"
                                width="125"><br>Speech Bubble 3</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_3153"
                                data-id="3153"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/pxw3zLXnXVPJ6YeNwBaO-small.jpg"
                                width="125"><br>Speech Bubble 3</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_3154"
                                data-id="3154"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/pxw3zLXW1q32JYeNwBaO-small.jpg"
                                width="125"><br>Speech Bubble 3</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_3158"
                                data-id="3158"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/pxw3zLXybR9AnYeNwBaO-small.jpg"
                                width="125"><br>Speech Bubble 3</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_3160"
                                data-id="3160"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/pxw3zLXGyjRaeYeNwBaO-small.jpg"
                                width="125"><br>Speech Bubble 3</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_3144"
                                data-id="3144"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/5d3Rpqyx1Gnw9YeNwBaO-small.jpg"
                                width="125"><br>Comic Eye 16</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_3129"
                                data-id="3129"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/5d3RpqyqXzYxYeNwBaO-small.jpg"
                                width="125"><br>Comic Eye 1</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_3130"
                                data-id="3130"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/5d3RpqyxMVvegYeNwBaO-small.jpg"
                                width="125"><br>Comic Eye 2</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_3131"
                                data-id="3131"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/5d3RpqywmM613YeNwBaO-small.jpg"
                                width="125"><br>Comic Eye 3</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_3133"
                                data-id="3133"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/5d3RpqyMwvRR1YeNwBaO-small.jpg"
                                width="125"><br>Comic Eye 5</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_3136"
                                data-id="3136"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/5d3RpqyZxEgEZYeNwBaO-small.jpg"
                                width="125"><br>Comic Eye 8</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_3139"
                                data-id="3139"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/5d3RpqyODbQKJYeNwBaO-small.jpg"
                                width="125"><br>Comic Eye 11</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_3141"
                                data-id="3141"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/5d3RpqyAE5XRDYeNwBaO-small.jpg"
                                width="125"><br>Comic Eye 13</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_3103"
                                data-id="3103"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/aqvMwo2JEQVRKYeNwBaO-small.jpg"
                                width="125"><br>Atom 2</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_3104"
                                data-id="3104"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/aqvMwo2bNJ9QdYeNwBaO-small.jpg"
                                width="125"><br>Atom 3</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_3072"
                                data-id="3072"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/QGQ3GlAQReOe5YeNwBaO-small.jpg"
                                width="125"><br>Catmaran</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_3070"
                                data-id="3070"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/YDRMDllGq9pplYeNwBaO-small.jpg"
                                width="125"><br>Canoe 1</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_3043"
                                data-id="3043"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/QGQ3wKzZPWyYxYeNwBaO-small.jpg"
                                width="125"><br>Compass 1</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_3044"
                                data-id="3044"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/QGQ3wKzyj5zDBYeNwBaO-small.jpg"
                                width="125"><br>Compass 2</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_3036"
                                data-id="3036"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/RWwMKq1ryy13QYeNwBaO-small.jpg"
                                width="125"><br>Sea Wheel 4</li>
                        <li style="padding-top:10px;" class="clipart_box"><img
                                class="th clipart_thumb addclipart_clipart_1_clip" id="addclipart_clipart_1_3025"
                                data-id="3025"
                                src="https://ciptaloka-preview.s3.amazonaws.com/cliparts/aqvMeEQ1raAalYeNwBaO-small.jpg"
                                width="125"><br>Anchor 28</li>
                    </ul>
                </div>
            </div>
            <div class="row" style="margin-top:20px;">
                <div class="large-3 medium-4 small-4 large-offset-6 medium-offset-4 small-offset-4 columns">
                    <a href="#" id="addclipart_button_2"
                        class="button expand tiny cipta-button-lightgray close-reveal-modal"
                        style="position:relative; top:0px; left:0px; line-height:normal">Batal</a>
                </div>
                <div class="large-3 medium-4 small-4 columns">
                    <a href="#" id="addclipart_button_1" class="button expand tiny cipta-button-darkblue">Pilih
                        Clipart</a>
                </div>
            </div>
        </div>
    </div>
</div>
editor -->