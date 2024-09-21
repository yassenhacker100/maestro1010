<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MAESTRO</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">
    <link href="css/templatemo-festava-live.css" rel="stylesheet">
    <link rel="icon" href="images/Red Abstract Fire Letter A Logo.png">
    <style>
        
        .toggle-switch {
            position: relative;
            width: 100px;
            height: 50px;
            --light: #d8dbe0;
            --dark: #28292c;
            --link: rgb(27, 129, 112);
            --link-hover: rgb(24, 94, 82);
        }
        
        .switch-label {
            position: absolute;
            width: 100%;
            height: 50px;
            background-color: var(--dark);
            border-radius: 25px;
            cursor: pointer;
            border: 3px solid var(--dark);
        }
        
        .checkbox {
            position: absolute;
            display: none;
        }
        
        .slider {
            position: absolute;
            width: 100%;
            height: 100%;
            border-radius: 25px;
            transition: 0.3s;
        }
        
        .checkbox:checked ~ .slider {
            background-color: var(--light);
        }
        
        .slider::before {
            content: "";
            position: absolute;
            top: 10px;
            left: 10px;
            width: 25px;
            height: 25px;
            border-radius: 50%;
            box-shadow: inset 12px -4px 0px 0px var(--light);
            background-color: var(--dark);
            transition: 0.3s;
        }
        
        .checkbox:checked ~ .slider::before {
            transform: translateX(50px);
            background-color: var(--dark);
            box-shadow: none;
        }

    /* الخلفية الافتراضية البيضاء */
    body {
        background-color: white;
        transition: background-color 0.3s ease;
    }

    /* الخلفية السوداء عند التبديل */
    .dark-mode {
        background-color: black;
        color: white;
    }
.button {
  position: relative;
  transition: all 0.3s ease-in-out;
  box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
  padding-block: 0.5rem;
  padding-inline: 1.25rem;
  background-color: rgb(0 107 179);
  border-radius: 9999px;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #ffff;
  gap: 10px;
  font-weight: bold;
  border: 3px solid #ffffff4d;
  outline: none;
  overflow: hidden;
  font-size: 15px;
}

.icon {
  width: 24px;
  height: 24px;
  transition: all 0.3s ease-in-out;
}

.button:hover {
  transform: scale(1.05);
  border-color: #fff9;
}

.button:hover .icon {
  transform: translate(4px);
}

.button:hover::before {
  animation: shine 1.5s ease-out infinite;
}

.button::before {
  content: "";
  position: absolute;
  width: 100px;
  height: 100%;
  background-image: linear-gradient(
    120deg,
    rgba(255, 255, 255, 0) 30%,
    rgba(255, 255, 255, 0.8),
    rgba(255, 255, 255, 0) 70%
  );
  top: 0;
  left: -100px;
  opacity: 0.6;
}

@keyframes shine {
  0% {
    left: -100px;
  }

  60% {
    left: 100%;
  }

  to {
    left: 100%;
  }
}
/* From Uiverse.io by satyamchaudharydev */ 
.button {
  position: relative;
  transition: all 0.3s ease-in-out;
  box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
  padding-block: 0.5rem;
  padding-inline: 1.25rem;
  background-color: rgb(0 107 179);
  border-radius: 9999px;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #ffff;
  gap: 10px;
  font-weight: bold;
  border: 3px solid #ffffff4d;
  outline: none;
  overflow: hidden;
  font-size: 15px;
}

.icon {
  width: 24px;
  height: 24px;
  transition: all 0.3s ease-in-out;
}

.button:hover {
  transform: scale(1.05);
  border-color: #fff9;
}

.button:hover .icon {
  transform: translate(4px);
}

.button:hover::before {
  animation: shine 1.5s ease-out infinite;
}

.button::before {
  content: "";
  position: absolute;
  width: 100px;
  height: 100%;
  background-image: linear-gradient(
    120deg,
    rgba(255, 255, 255, 0) 30%,
    rgba(255, 255, 255, 0.8),
    rgba(255, 255, 255, 0) 70%
  );
  top: 0;
  left: -100px;
  opacity: 0.6;
}

@keyframes shine {
  0% {
    left: -100px;
  }

  60% {
    left: 100%;
  }

  to {
    left: 100%;
  }
}


.videov {

  width: 100%;
  height: 100%;
  object-fit: cover;
}
/* From Uiverse.io by vinodjangid07 */ 
.Documents-btn {
  display: flex;
  align-items: center;
  justify-content: flex-start;
  width: fit-content;
  height: 45px;
  border: none;
  padding: 0px 15px;
  border-radius: 5px;
  background-color: rgb(49, 49, 83);
  gap: 10px;
  cursor: pointer;
  transition: all 0.3s;
}
.folderContainer {
  width: 40px;
  height: fit-content;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: flex-end;
  position: relative;
}
.fileBack {
  z-index: 1;
  width: 80%;
  height: auto;
}
.filePage {
  width: 50%;
  height: auto;
  position: absolute;
  z-index: 2;
  transition: all 0.3s ease-out;
}
.fileFront {
  width: 85%;
  height: auto;
  position: absolute;
  z-index: 3;
  opacity: 0.95;
  transform-origin: bottom;
  transition: all 0.3s ease-out;
}
.text {
  color: white;
  font-size: 14px;
  font-weight: 600;
  letter-spacing: 0.5px;
}
.Documents-btn:hover .filePage {
  transform: translateY(-5px);
}
.Documents-btn:hover {
  background-color: rgb(58, 58, 94);
}
.Documents-btn:active {
  transform: scale(0.95);
}
.Documents-btn:hover .fileFront {
  transform: rotateX(30deg);
}

@media (max-width: 768px) {
    .navbar-nav {
        flex-direction: column;
    }
    .dropdown-menu {
        position: static;
        float: none;
        width: 100%;
    }
}


    </style>
</head>
<body>
    <main>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.html">MAESTRO</a>
               
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav align-items-lg-center ms-auto me-lg-5">
                        <li class="nav-item"><a class="nav-link click-scroll" href="#section_1">Home</a></li>
                        <li class="nav-item"><a class="nav-link click-scroll" href="#section_2">About</a></li>
                        <li class="nav-item"><a class="nav-link click-scroll" href="#section_3">Item</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Beams</a></li>
                                <li><a class="dropdown-item" href="#">Mini Beams</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">hreznal</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              
                <div class="toggle-switch">
                  <label class="switch-label">
                      <input type="checkbox" class="checkbox">
                      <span class="slider"></span>
                  </label>
              </div>
              
            </div>
        </nav>
      </main>
        <section class="hero-section" id="section_1">
            <div class="section-overlay"></div>
            <div class="container d-flex justify-content-center align-items-center">
                <div class="row">
                    <div class="col-12 mt-auto mb-5 text-center">
                        <h1 style="color:white">Welcome to MAESTRO</h1>
                        <h2 style="color:white; font-size: 30px;">PROFESSIONAL SOUND & LIGHTING SYSTEM</h2>
                    </div>
                    <div class="col-lg-12 col-12 mt-auto d-flex flex-column flex-lg-row text-center">
                        <div class="date-wrap">
                            <h5 class="text-white">
                                <i class="custom-icon bi-clock me-2"></i>
                                10 - 12<sup>th</sup>, in all the days
                            </h5>
                        </div>
                        <div class="location-wrap mx-auto py-3 py-lg-0">
                            <h5 class="text-white">
                                <i class="custom-icon bi-geo-alt me-2"></i>
                                المقطم / القاهره
                            </h5>
                        </div>
                        <ul class="socail-media">
                            <li><a href="https://www.facebook.com/ahmed.nagla.965">
                                <svg viewBox="0 0 10.712 20" height="20" width="10.712" xmlns="http://www.w3.org/2000/svg">
                                    <path transform="translate(-22.89)" d="M32.9,11.25l.555-3.62H29.982V5.282a1.81,1.81,0,0,1,2.041-1.955H33.6V.245A19.255,19.255,0,0,0,30.8,0c-2.86,0-4.73,1.734-4.73,4.872V7.63H22.89v3.62h3.179V20h3.913V11.25Z" id="facebook"></path>
                                </svg>
                            </a></li>
                            <li><a href="https://www.instagram.com/njlh.hmd?utm_source=qr&igsh=N2Uwbnh1Nzl6cTI2">
                                <svg viewBox="0 0 20 20" height="20" width="20" xmlns="http://www.w3.org/2000/svg" id="instagram">
                                    <g transform="translate(15.354 3.707)" data-name="Group 64" id="Group_64">
                                        <g data-name="Group 63" id="Group_63">
                                            <path fill="#00" transform="translate(-392.401 -94.739)" d="M392.871,94.739a.47.47,0,1,0,.47.47A.47.47,0,0,0,392.871,94.739Z" data-name="Path 5" id="Path_5"></path>
                                        </g>
                                    </g>
                            
          <g transform="translate(5.837 5.837)" data-name="Group 66" id="Group_66">
            <g data-name="Group 65" id="Group_65">
              <path fill="#000" transform="translate(-145.804 -145.804)" d="M149.967,145.8a4.163,4.163,0,1,0,4.163,4.163A4.168,4.168,0,0,0,149.967,145.8Z" data-name="Path 6" id="Path_6"></path>
            </g>
          </g>
          <g data-name="Group 68" id="Group_68">
            <g data-name="Group 67" id="Group_67">
              <path fill="#000" d="M14.517,0H5.483A5.489,5.489,0,0,0,0,5.483v9.035A5.489,5.489,0,0,0,5.483,20h9.035A5.489,5.489,0,0,0,20,14.517V5.483A5.489,5.489,0,0,0,14.517,0ZM10,15.486A5.486,5.486,0,1,1,15.486,10,5.492,5.492,0,0,1,10,15.486Zm5.814-9.633A1.667,1.667,0,1,1,17.48,4.186,1.669,1.669,0,0,1,15.814,5.853Z" data-name="Path 7" id="Path_7"></path>
            </g>
          </g>
        </svg>

    </a>
  </li>

      
  <li>
    <a href="https://www.snapchat.com/add/nahmed244295?share_id=jopFRx51Tds&locale=ar-AE">
      <svg viewBox="0 0 19.838 18.6" height="18.6" width="19.838" xmlns="http://www.w3.org/2000/svg">
  <g transform="translate(0 -15.988)" data-name="svgexport-10 (13)" id="svgexport-10_13_">
    <g transform="translate(0 15.988)" data-name="Group 10" id="Group_10">
      <g transform="translate(0 0)" data-name="Group 9" id="Group_9">
        <path fill="#000" transform="translate(0 -15.988)" d="M19.449,29.877a5.73,5.73,0,0,1-3.9-3.269.188.188,0,0,0-.011-.022.82.82,0,0,1-.093-.675c.145-.34.7-.516,1.068-.632.107-.033.207-.066.29-.1a2.245,2.245,0,0,0,.791-.472.751.751,0,0,0,.241-.541.851.851,0,0,0-.637-.738,1.152,1.152,0,0,0-.432-.082.961.961,0,0,0-.4.082,2.255,2.255,0,0,1-.827.236.759.759,0,0,1-.274-.06c.007-.124.015-.252.024-.383l0-.057a9.821,9.821,0,0,0-.253-4.005,5.388,5.388,0,0,0-1.214-1.737,5.076,5.076,0,0,0-1.452-.957,5.737,5.737,0,0,0-2.265-.479h-.05l-.341,0a5.759,5.759,0,0,0-2.268.479A5.048,5.048,0,0,0,6,17.426,5.4,5.4,0,0,0,4.8,19.16a9.829,9.829,0,0,0-.254,4v0c.009.144.019.294.027.44a.8.8,0,0,1-.325.061,2.151,2.151,0,0,1-.884-.237.794.794,0,0,0-.336-.069,1.188,1.188,0,0,0-.594.166.822.822,0,0,0-.42.537.741.741,0,0,0,.283.7,2.438,2.438,0,0,0,.739.423c.084.033.185.064.29.1.367.117.924.293,1.069.632a.826.826,0,0,1-.094.675.176.176,0,0,0-.01.022,6.566,6.566,0,0,1-1,1.545,5.608,5.608,0,0,1-1.205,1.064,4.435,4.435,0,0,1-1.693.658A.463.463,0,0,0,0,30.359a.587.587,0,0,0,.048.2h0a1.239,1.239,0,0,0,.672.574,7.675,7.675,0,0,0,1.941.5,2.354,2.354,0,0,1,.119.427c.032.149.066.3.114.465a.508.508,0,0,0,.532.387,2.59,2.59,0,0,0,.456-.063,5.189,5.189,0,0,1,1.04-.118,4.521,4.521,0,0,1,.744.063,3.534,3.534,0,0,1,1.39.718A4.5,4.5,0,0,0,9.8,34.587q.05,0,.1,0c.04,0,.091,0,.143,0a4.507,4.507,0,0,0,2.74-1.066h0a3.546,3.546,0,0,1,1.39-.717,4.521,4.521,0,0,1,.744-.063,5.213,5.213,0,0,1,1.04.11,2.514,2.514,0,0,0,.456.056h.022a.5.5,0,0,0,.51-.381c.047-.16.081-.309.114-.461a2.435,2.435,0,0,1,.118-.424,7.728,7.728,0,0,0,1.941-.5,1.244,1.244,0,0,0,.671-.573.589.589,0,0,0,.05-.2A.461.461,0,0,0,19.449,29.877Z" data-name="Path 6565" id="Path_6565"></path>
      </g>
    </g>
  </g>
</svg>

    </a>
  </li>

  <li>
    <a href="https://www.tiktok.com/@ahmednagla1?_t=8osT7IcJaui&_r=1">
      <svg viewBox="0 0 19.738 22.466" height="22.466" width="19.738" xmlns="http://www.w3.org/2000/svg" data-name="Group 101" id="Group_101">
  <path fill="#000" transform="translate(-31.423 -0.39)" d="M51.151,6.015a5.661,5.661,0,0,1-3.42-1.143A5.662,5.662,0,0,1,45.469.39H41.8V10.414l0,5.49a3.325,3.325,0,1,1-2.281-3.151V9.029a7.218,7.218,0,0,0-1.058-.078,7.034,7.034,0,0,0-5.286,2.364,6.893,6.893,0,0,0,.311,9.505,7.158,7.158,0,0,0,.663.579,7.035,7.035,0,0,0,4.312,1.458,7.219,7.219,0,0,0,1.058-.078,7.011,7.011,0,0,0,3.917-1.959,6.868,6.868,0,0,0,2.06-4.887l-.019-8.2a9.3,9.3,0,0,0,5.688,1.933V6.014h-.011Z" data-name="Path 6566" id="Path_6566"></path>
</svg>

    </a>
  </li>
  
  <li>
    <a href="https://x.com/AhmedNagla6846?t=Nr-5xhdVVAKBfmyMHfwdSg&s=08">
       <svg viewBox="0 0 23.06 18" height="18" width="23.06" xmlns="http://www.w3.org/2000/svg">
        <path fill="#000" transform="translate(0 -48.082)" d="M20.69,52.568c.015.2.015.394.015.591A13.085,13.085,0,0,1,7.258,66.082,13.752,13.752,0,0,1,0,64.043a10.168,10.168,0,0,0,1.141.056,9.712,9.712,0,0,0,5.868-1.941,4.715,4.715,0,0,1-4.419-3.15,6.2,6.2,0,0,0,.893.07,5.189,5.189,0,0,0,1.244-.155,4.592,4.592,0,0,1-3.79-4.458V54.41a4.907,4.907,0,0,0,2.136.577A4.5,4.5,0,0,1,.966,51.2a4.375,4.375,0,0,1,.644-2.292,13.621,13.621,0,0,0,9.745,4.753,4.936,4.936,0,0,1-.117-1.041,4.635,4.635,0,0,1,4.726-4.542,4.806,4.806,0,0,1,3.453,1.434,9.538,9.538,0,0,0,3-1.1,4.567,4.567,0,0,1-2.078,2.5,9.779,9.779,0,0,0,2.722-.7A9.953,9.953,0,0,1,20.69,52.568Z" id="twitter"></path>
      </svg>


    </a>
  </li>
  
</ul>
            </div>
            </div>
</div>
        
    
    <div class="video-wrap">
        <video autoplay muted loop class="custom-video" poster="">
            <source src="video/pexels-2022395.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        
    </div>
</section>
<section class="about-section section-padding" id="section_2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12 mb-4 mb-lg-0 d-flex align-items-center">
                <div class="services-info">
                    <h2 class="text-white mb-4">About MAESTRO</h2>
                    <p class="text-white">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis deserunt incidunt odio cumque. Aperiam minus suscipit veritatis error a possimus dicta tenetur. Earum alias labore temporibus officiis facere architecto? Rem!</p>
                    <h6 class="text-white mt-4">Once in Lifetime Experience</h6>
                    <p class="text-white">You are not allowed to redistribute the template ZIP file on any other website without a permission.</p>
                    <h6 class="text-white mt-4">Whole Night Party</h6>
                    <p class="text-white">Please tell your friends about our website. Thank you.</p>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="about-text-wrap">
                    <img src="images/WhatsApp Image 2024-07-24 at 07.58.58_ca4f817e.jpg" class="about-image img-fluid">
                </div>
            </div>
        </div>
    </div>
    <!-- <br><br><br>
<video class="videov" src="video/gro.mp4" autoplay muted playsinline loop></video> -->
</section>

<video class="videov" src="video/coming coon.mp4" autoplay muted playsinline loop></video>
<a href="جدول.html">   

<button class="Documents-btn mx-auto">

  <span class="folderContainer"> 
    
    <svg
      class="fileBack"
      width="146"
      height="113"
      viewBox="0 0 146 113"
      fill="none"
      xmlns="http://www.w3.org/2000/svg"
    >
      <path
        d="M0 4C0 1.79086 1.79086 0 4 0H50.3802C51.8285 0 53.2056 0.627965 54.1553 1.72142L64.3303 13.4371C65.2799 14.5306 66.657 15.1585 68.1053 15.1585H141.509C143.718 15.1585 145.509 16.9494 145.509 19.1585V109C145.509 111.209 143.718 113 141.509 113H3.99999C1.79085 113 0 111.209 0 109V4Z"
        fill="url(#paint0_linear_117_4)"
      ></path>
      
      <defs>
        <linearGradient
          id="paint0_linear_117_4"
          x1="0"
          y1="0"
          x2="72.93"
          y2="95.4804"
          gradientUnits="userSpaceOnUse"
        >
          <stop stop-color="#8F88C2"></stop>
          <stop offset="1" stop-color="#5C52A2"></stop>
        </linearGradient>
      </defs>
    </svg>
    <svg
      class="filePage"
      width="88"
      height="99"
      viewBox="0 0 88 99"
      fill="none"
      xmlns="http://www.w3.org/2000/svg"
    >
      <rect width="88" height="99" fill="url(#paint0_linear_117_6)"></rect>
      <defs>
        <linearGradient
          id="paint0_linear_117_6"
          x1="0"
          y1="0"
          x2="81"
          y2="160.5"
          gradientUnits="userSpaceOnUse"
        >
          <stop stop-color="white"></stop>
          <stop offset="1" stop-color="#686868"></stop>
        </linearGradient>
      </defs>
    </svg>
    <svg
      class="fileFront"
      width="160"
      height="79"
      viewBox="0 0 160 79"
      fill="none"
      xmlns="http://www.w3.org/2000/svg"
    >
      <path
        d="M0.29306 12.2478C0.133905 9.38186 2.41499 6.97059 5.28537 6.97059H30.419H58.1902C59.5751 6.97059 60.9288 6.55982 62.0802 5.79025L68.977 1.18034C70.1283 0.410771 71.482 0 72.8669 0H77H155.462C157.87 0 159.733 2.1129 159.43 4.50232L150.443 75.5023C150.19 77.5013 148.489 79 146.474 79H7.78403C5.66106 79 3.9079 77.3415 3.79019 75.2218L0.29306 12.2478Z"
        fill="url(#paint0_linear_117_5)"
      ></path>
      <defs>
        <linearGradient
          id="paint0_linear_117_5"
          x1="38.7619"
          y1="8.71323"
          x2="66.9106"
          y2="82.8317"
          gradientUnits="userSpaceOnUse"
        >
          <stop stop-color="#C3BBFF"></stop>
          <stop offset="1" stop-color="#51469A"></stop>
        </linearGradient>
      </defs>
    </svg>
  </span>

  <p class="text">Please click here to download pdf</p>
</a>
</button>

<!-- <div class="containe">
    <video class="videoc" src="video/Black & Blue Neon Coming Soon TikTok Video.mp4" autoplay muted playsinline loop></video>
  </div> -->

<section class="portfolio-section" id="section_3">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="portfolio-btn-wrapper">
                    <br><br><br>
                    <img class="img-fluid" src="information/WhatsApp Image 2024-08-17 at 12.04.59_a49d6d61.png" alt="portfolio item photo">
                    
                    <a href="effect.html"><button class="button">
                      More Device !
                      <svg fill="currentColor" viewBox="0 0 24 24" class="icon">
                        <path clip-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm4.28 10.28a.75.75 0 000-1.06l-3-3a.75.75 0 10-1.06 1.06l1.72 1.72H8.25a.75.75 0 000 1.5h5.69l-1.72 1.72a.75.75 0 101.06 1.06l3-3z" fill-rule="evenodd"></path>
                      </svg>
                    </button></a>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="portfolio-btn-wrapper">
                  <br>
                    <img class="img-fluid" src="images/c.png" alt="portfolio item photo">
                    <br>
                    <a href="beams copy 2.html"><button class="button">
                      More Device !
                      <svg fill="currentColor" viewBox="0 0 24 24" class="icon">
                        <path clip-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm4.28 10.28a.75.75 0 000-1.06l-3-3a.75.75 0 10-1.06 1.06l1.72 1.72H8.25a.75.75 0 000 1.5h5.69l-1.72 1.72a.75.75 0 101.06 1.06l3-3z" fill-rule="evenodd"></path>
                      </svg>
                    </button></a>
                    
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="portfolio-btn-wrapper">
                    
                    <img class="img-fluid" src="device/WhatsApp Image 2024-08-14 at 19.15.14_12e16820.png" alt="portfolio item photo"width="356" height="199">
            <BR><br><br><br>
              <a href="effect.html"><button class="button">
                More Device !
                <svg fill="currentColor" viewBox="0 0 24 24" class="icon">
                  <path clip-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm4.28 10.28a.75.75 0 000-1.06l-3-3a.75.75 0 10-1.06 1.06l1.72 1.72H8.25a.75.75 0 000 1.5h5.69l-1.72 1.72a.75.75 0 101.06 1.06l3-3z" fill-rule="evenodd"></path>
                </svg>
              </button></a>
                </div>
            </div>
        </div>
    </div>
<br><br><br>
    
    <div class="container">
        
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="portfolio-btn-wrapper">
                    <br><br><br><br>
                    <img class="img-fluid" src="device/7.png" alt="portfolio item photo">
                    <br><br><br><br>
                    <a href="trusa.html"><button class="button">
                      More Device !
                      <svg fill="currentColor" viewBox="0 0 24 24" class="icon">
                        <path clip-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm4.28 10.28a.75.75 0 000-1.06l-3-3a.75.75 0 10-1.06 1.06l1.72 1.72H8.25a.75.75 0 000 1.5h5.69l-1.72 1.72a.75.75 0 101.06 1.06l3-3z" fill-rule="evenodd"></path>
                      </svg>
                    </button></a>
                </div>
            </div>
           
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="portfolio-btn-wrapper">
                    <br>
                    <img class="img-fluid" src="device/WhatsApp Image 2024-08-14 at 19.11.00_a01da114.png" alt="portfolio item photo">
                    <br>
                    <a href="moving head beam.html"><button class="button">
                      More Device !
                      <svg fill="currentColor" viewBox="0 0 24 24" class="icon">
                        <path clip-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm4.28 10.28a.75.75 0 000-1.06l-3-3a.75.75 0 10-1.06 1.06l1.72 1.72H8.25a.75.75 0 000 1.5h5.69l-1.72 1.72a.75.75 0 101.06 1.06l3-3z" fill-rule="evenodd"></path>
                      </svg>
                    </button></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="portfolio-btn-wrapper">
                    <br><br><br><br><br><br><br><br>
                    <img class="img-fluid" src="device/WhatsApp Image 2024-08-12 at 21.36.25_f5c1c512.png" alt="portfolio item photo">
                    <br><br><br><br><br><br><br>
                    <a href="control.html"><button class="button">
                      More Device !
                      <svg fill="currentColor" viewBox="0 0 24 24" class="icon">
                        <path clip-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm4.28 10.28a.75.75 0 000-1.06l-3-3a.75.75 0 10-1.06 1.06l1.72 1.72H8.25a.75.75 0 000 1.5h5.69l-1.72 1.72a.75.75 0 101.06 1.06l3-3z" fill-rule="evenodd"></path>
                      </svg>
                    </button></a>                </div>
            </div>
        </div>
    </div>
    
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="portfolio-btn-wrapper">
                    
                    <img class="img-fluid" src="device/WhatsApp Image 2024-08-12 at 21.28.02_f154723a.png"  alt="portfolio item photo">
                    <a href="for studio.html"><button class="button">
                      More Device !
                      <svg fill="currentColor" viewBox="0 0 24 24" class="icon">
                        <path clip-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm4.28 10.28a.75.75 0 000-1.06l-3-3a.75.75 0 10-1.06 1.06l1.72 1.72H8.25a.75.75 0 000 1.5h5.69l-1.72 1.72a.75.75 0 101.06 1.06l3-3z" fill-rule="evenodd"></path>
                      </svg>
                    </button></a>                </div>
            </div>
            
            
            
        </div>
    </div>
</section>

<footer class="site-footer">
<div class="site-footer-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <h2 class="text-white mb-lg-0" style="text-align: center;">MAESTRO</h2>
            </div>

        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-6 col-12 mb-4 pb-2">
            <h5 class="site-footer-title mb-3">Links</h5>
            <ul class="site-footer-links">
                <li class="site-footer-link-item">
                    <a href="#" class="site-footer-link">Home</a>
                </li>
                <li class="site-footer-link-item">
                    <a href="#" class="site-footer-link">About</a>
                </li>
                <li class="site-footer-link-item">
                    <a href="#" class="site-footer-link">item</a>
                </li>
        </ul>
        </div>
        <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0"><h5 class="site-footer-title mb-3">Have a question?</h5>
            <p class="text-white d-flex mb-1">
                <a href="tel: +201115330440" class="site-footer-link">01115330440</a>

                </p>
                <p class="text-white d-flex mb-1">
                <a href="tel: +20109" class="site-footer-link">01090549053</a>
              </p>
            <p class="text-white d-flex"><a href="mailto:AhmedNagla86@gmail.com" class="site-footer-link">AhmedNagla86@gmail.com</a></p></div>
        <div class="col-lg-3 col-md-6 col-11 mb-4 mb-lg-0 mb-md-0">
            <h5 class="site-footer-title mb-3">Location</h5>
            <p class="text-white d-flex mt-3 mb-2">Silang Junction South, Tagaytay, Cavite, Philippines</p>
            <a class="link-fx-1 color-contrast-higher mt-3" href="#">
                <span>Our Maps</span>
                <svg class="icon" viewBox="0 0 32 32" aria-hidden="true"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><circle cx="16" cy="16" r="15.5"></circle><line x1="10" y1="18" x2="16" y2="12"></line><line x1="16" y1="12" x2="22" y2="18"></line></g></svg>
            </a>
        </div>
    </div>
</div>
<div class="site-footer-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-12 mt-5">
                <p class="copyright-text">This Page By Ahmed Nagla</p>
            </div>
        </div>
    </div>
</div>
</footer>
    
<script>$("#info1").click(function(){$("#info1-text").toggle();});
$("#info2").click(function(){$("#info2-text").toggle();});
$("#info3").click(function(){$("#info3-text").toggle();});
$("#info4").click(function(){$("#info4-text").toggle();});
$("#info5").click(function(){$("#info5-text").toggle();});</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
          const checkbox = document.querySelector('.checkbox');
          const body = document.body;
  
          // التحقق من حالة التبديل عند تحميل الصفحة
          checkbox.addEventListener('change', function() {
              if (checkbox.checked) {
                  body.classList.add('dark-mode');
              } else {
                  body.classList.remove('dark-mode');
              }
          });
      });
  </script>
  <!-- Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

<!-- Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/custom.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5/siPlf/W2JhmWSG2IIjPC36rG5Lv5mzvxuHYtWs" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.3/umd/popper.min.js" integrity="sha384-eEWr9W+vvzA16AtO7LktccRGufZeKpH+ox3E4sUjrF1q1ZZx8bIVvvcsTACD9zHe" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-FZpjrxWiO8RQ8sZIBrC2eKKkRmLeXGmnHlgFk17M4M1eJxlknpSLSTZiAPJr/smy" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5/siPlf/W2JhmWSG2IIjPC36rG5Lv5mzvxuHYtWs" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-FZpjrxWiO8RQ8sZIBrC2eKKkRmLeXGmnHlgFk17M4M1eJxlknpSLSTZiAPJr/smy" crossorigin="anonymous"></script>
</body>
</html>