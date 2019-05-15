<div class="containers">
    <div id="carousel">
        @isset($ads)
        @foreach($ads as $ad)
        <figure><img class="imgs" data-id="{{$ad->ad_id}}" id="myImg" src="/uploads/ads/{{$ad->ad_content}}" alt="">
        </figure>
        @endforeach
        @endisset
    </div>
</div>

<style>
/* Style the Image Used to Trigger the Modal */
#myImg {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

#myImg:hover {
    opacity: 0.7;
}

/* The Modal (background) */
.imgmdl {
    display: none;
    /* Hidden by default */
    position: fixed;
    /* Stay in place */
    z-index: 1;
    /* Sit on top */
    padding-top: 100px;
    /* Location of the box */
    left: 0;
    top: 0;
    width: 100%;
    /* Full width */
    height: 100%;
    /* Full height */
    overflow: auto;
    /* Enable scroll if needed */
    background-color: rgb(0, 0, 0);
    /* Fallback color */
    background-color: rgba(0, 0, 0, 0.9);
    /* Black w/ opacity */
}

/* Modal Content (Image) */
.contents {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
}

/* Caption of Modal Image (Image Text) - Same Width as the Image */
#caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 150px;
}

/* Add Animation - Zoom in the Modal */
.contents,
#caption {
    animation-name: zoom;
    animation-duration: 0.6s;
}

@keyframes zoom {
    from {
        transform: scale(0)
    }

    to {
        transform: scale(1)
    }
}

/* The Close Button */
.close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
}

.close:hover,
.close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px) {
    .contents {
        width: 100%;
    }
}
</style>
<style>
*:before,
*:after {
    box-sizing: border-box;
}




.containers {
    margin: 4% auto;
    width: 210px;
    height: 140px;
    position: relative;
    perspective: 1000px;
}

#carousel {
    width: 100%;
    height: 100%;
    position: absolute;
    transform-style: preserve-3d;
    animation: rotation 20s infinite linear;
}

#carousel:hover {
    animation-play-state: paused;
}

#carousel figure {
    display: block;
    position: absolute;
    width: 186px;
    height: 116px;
    left: 10px;
    top: 10px;
    background: black;
    overflow: hidden;
    border: solid 5px black;
}

#carousel figure:nth-child(1) {
    transform: rotateY(0deg) translateZ(288px);
}

#carousel figure:nth-child(2) {
    transform: rotateY(40deg) translateZ(288px);
}

#carousel figure:nth-child(3) {
    transform: rotateY(80deg) translateZ(288px);
}

#carousel figure:nth-child(4) {
    transform: rotateY(120deg) translateZ(288px);
}

#carousel figure:nth-child(5) {
    transform: rotateY(160deg) translateZ(288px);
}

#carousel figure:nth-child(6) {
    transform: rotateY(200deg) translateZ(288px);
}

#carousel figure:nth-child(7) {
    transform: rotateY(240deg) translateZ(288px);
}

#carousel figure:nth-child(8) {
    transform: rotateY(280deg) translateZ(288px);
}

#carousel figure:nth-child(9) {
    transform: rotateY(320deg) translateZ(288px);
}

.imgs {
    width: inherit;
    height: -webkit-fill-available;
    transition: all .5s ease;
}

.imgs:hover {
    -webkit-filter: grayscale(0);
    transform: scale(1.2, 1.2);
}

@keyframes rotation {
    from {
        transform: rotateY(0deg);
    }

    to {
        transform: rotateY(360deg);
    }
}
</style>