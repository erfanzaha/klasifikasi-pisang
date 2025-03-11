<!-- <div class="row row-eq-height my-3 mt-3">
    <div class="col-md-6">
        <div class="col-md-20">
            <div class="card no-b mb-3">

                <div class="d-flex justify-content-between align-items-center">
                    <div><i class="s-18">Input Data Testing Citra</i></div>

                    <div class="custom-file">
                        <div class="col-md-15">
                            <span>Select Image</span>
                            <input id="image-up" name="image" type="file" class="custom-file-input" accept="image/*"
                                onchange="original()">
                            <label type="text" class="custom-file-label" for="validatedCustomFile" name="image"></label>
                        </div>
                        <div class="col-md-15"><br />
                            <button class="btn btn-primary" type="button" onclick="original()">Original</button>
                            <button class="btn btn-info" type="button" onclick="grayscale()">Grayscale</button>
                            <button class="btn btn-info" type="button" onclick="zoom('in')">Zoom In</button>
                            <button class="btn btn-info" type="button" onclick="zoom('out')">Zoom Out</button>
                            <button class="btn btn-info" type="button" onclick="edge()">Edge</button>
                        </div>

                        <div class="row">
                            <div class="col m6">
                                <div class="row center-align">
                                    <h1>Citra Original</h1>
                                </div>
                                <div class="row center-align">
                                    <img id="ori-image">
                                </div>
                            </div>
                            
                            <div class="col m6">
                                <div class="row center-align">
                                    <h1>Citra Edit</h1>
                                </div>
                                <div class="row center-align">
                                    <img id="edit-image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div> -->


<div class="row">
    <div class="col-md-12">
        <label>Input Data Testing Citra </label>
        <div class="form-group">
            <div class="form-line">
                <input id="image-up" name="image" type="file" class="custom-file-input form-control" accept="image/*"
                    onchange="original()">
                <label type="text" class="custom-file-label" for="validatedCustomFile" name="image"></label>
            </div>
        </div>
    </div>
</div>
<hr>
<div classs="row">
    <div class="col-md-12">
        <button class="btn btn-primary" type="button" onclick="original()">Original</button>
        <button class="btn btn-info" type="button" onclick="grayscale()">Grayscale</button>
        <button class="btn btn-info" type="button" onclick="zoom('in')">Zoom In</button>
        <button class="btn btn-info" type="button" onclick="zoom('out')">Zoom Out</button>
        <button class="btn btn-info" type="button" onclick="edge()">Edge Detection</button>
        <button class="btn btn-info" type="button" onclick="medianfilter()">Median Filter</button>
        <div class="card-body b-b">
            <div class="card-title">Scaling</div>
            <input type="range" onchange="slider(this.value)" value="#slider" class="range-slider form-control" data-options='{
                    "min": -100,
                    "max": 100,
                    "grid": true,
                    "from": 0 
                }' />
            <input type="text" id="valawal" value="0"/>
            <input type="text" id="valsekarang" value="0"/>
            
        </div>


    </div>
</div>
<hr>
<div class="row">
    <div class="col-md-6">
        <h5 class="mb-2"><strong>Citra Original</strong></h5>
        <img id="ori-image">
    </div>

    <div class="col-md-6">
        <h5 class="mb-2"><strong>Citra Edit</strong></h5>
        <img id="edit-image">
    </div>
</div>