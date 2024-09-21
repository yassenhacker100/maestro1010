<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bar water brove</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css/bootstrap-icons.css" rel="stylesheet">
    <link href="css/templatemo-festava-live.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
.gallery-item {
                position: relative;
                overflow: hidden;
                border: 3px solid black;
                border-radius: 5px;
                box-shadow: 0 4px 8px rgba(0,0,0,0.2);
                margin: 16px;
                text-align: center;
            }
    
            .gallery-item img {
                width: 100%;
                height: auto; /* الحفاظ على نسبة العرض إلى الارتفاع الأصلية */
                display: block;
            }
    
            .gallery-item .info-content {
                display: none; /* إخفاء النص بشكل افتراضي */
                position: absolute;
                bottom: 50px; /* المسافة فوق الزر */
                left: 50%;
                transform: translateX(-50%);
                background: rgba(0, 0, 0, 0.7);
                color: white;
                padding: 10px;
                border-radius: 5px;
                width: 90%;
                text-align: center;
                overflow-y: auto; /* تمكين التمرير العمودي إذا كان النص طويل */
                max-height: 150px; /* تحديد أقصى ارتفاع للنص */
            }
    
            .gallery-item button {
                position: absolute;
                bottom: 10px; /* المسافة من الأسفل */
                left: 50%;
                transform: translateX(-50%);
                padding: 10px 20px;
                border-radius: 50px;
                cursor: pointer;
                border: 0;
                background-color: black;
                color: white;
                transition: all 0.5s ease;
            }
    
            .gallery-item button:hover {
                letter-spacing: 3px;
                background-color: hsl(261deg 80% 48%);
                box-shadow: rgb(0 0 0 / 20%) 0 7px 29px;
            }
    
            .gallery-item button:active {
                transform: translateX(-50%) translateY(2px);
                transition: 100ms;
            }
    </style>

        
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="index.html">MAESTRO</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Home</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>
    
        <div class="container mt-5">
            <h1 class="text-center mb-4">Image Gallery</h1>
            <div class="row">
                <!-- Example image 1 -->
                 
                <!-- Example image 1 -->
                <div class="col-md-4 col-sm-6">
                    <div class="gallery-item">
                        <img src="information/WhatsApp Image 2024-08-17 at 12.04.58_31567ac0.jpg" alt="Image 1">
                        <button>Info Device</button>
                        <div class="info-content">
                            <p style="color:white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni dolorem eos sint cupiditate, optio, ratione tempore commodi alias natus nisi similique blanditiis ad repudiandae, voluptates dicta corrupti nobis consectetur earum?</p>
                        </div>
                    </div>
                </div>
                <!-- Example image 2 -->
                <div class="col-md-4 col-sm-6">
                    <div class="gallery-item">
                        <br>
                        <img src="information/WhatsApp Image 2024-08-17 at 12.04.59_80edc4e6.jpg" alt="Image 2">
                        <br>
                        <button>Info Device</button>
                        <div class="info-content">
                            <p style="color:white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni dolorem eos sint cupiditate, optio, ratione tempore commodi alias natus nisi similique blanditiis ad repudiandae, voluptates dicta corrupti nobis consectetur earum?</p>
                        </div>
                    </div>
                </div>
                <!-- Example image 3 -->
                <div class="col-md-4 col-sm-6">
                    <div class="gallery-item">
                        <img src="information/WhatsApp Image 2024-08-17 at 12.04.59_a49d6d61.jpg" alt="Image 3">
                        <button>Info Device</button>
                        <div class="info-content">
                            <p style="color:white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni dolorem eos sint cupiditate, optio, ratione tempore commodi alias natus nisi similique blanditiis ad repudiandae, voluptates dicta corrupti nobis consectetur earum?</p>
                        </div>
                    </div>
                </div>
                
    
                <!-- Example image 1 -->
                <div class="col-md-4 col-sm-6">
                    <div class="gallery-item">
                        <img src="information/WhatsApp Image 2024-08-17 at 12.04.59_cc22a8a0.jpg" alt="Image 4">
                        <button>Info Device</button>
                        <div class="info-content">
                            <p style="color:white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni dolorem eos sint cupiditate, optio, ratione tempore commodi alias natus nisi similique blanditiis ad repudiandae, voluptates dicta corrupti nobis consectetur earum?</p>
                        </div>
                    </div>
                </div>
                <!-- Example image 2 -->
                <div class="col-md-4 col-sm-6">
                    <div class="gallery-item">
                        <br>
                        <img src="information/WhatsApp Image 2024-08-17 at 12.05.00_46e872a0.jpg" alt="Image 5">
                    
                        <button>Info Device</button>
                        <div class="info-content">
                            <p style="color:white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni dolorem eos sint cupiditate, optio, ratione tempore commodi alias natus nisi similique blanditiis ad repudiandae, voluptates dicta corrupti nobis consectetur earum?</p>
                        </div>
                    </div>
                </div>
                <!-- Example image 3 -->
                <div class="col-md-4 col-sm-6">
                    <div class="gallery-item">
                        <img src="information/WhatsApp Image 2024-08-17 at 12.05.00_b0465ada.jpg" alt="Image 6">
                        <button>Info Device</button>
                        <div class="info-content">
                            <p style="color:white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni dolorem eos sint cupiditate, optio, ratione tempore commodi alias natus nisi similique blanditiis ad repudiandae, voluptates dicta corrupti nobis consectetur earum?</p>
                        </div>
                    </div>
                </div>
                
            
                <!-- Example image 3 -->
                <div class="col-md-4 col-sm-6">
                    <div class="gallery-item">
                        <img src="information/WhatsApp Image 2024-08-17 at 12.05.00_c447971d.jpg" alt="Image 7">
                        <button>Info Device</button>
                        <div class="info-content">
                            <p style="color:white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni dolorem eos sint cupiditate, optio, ratione tempore commodi alias natus nisi similique blanditiis ad repudiandae, voluptates dicta corrupti nobis consectetur earum?</p>
                        </div>
                    </div>
                </div>
                
                   <!-- Example image 2 -->
                   <div class="col-md-4 col-sm-6">
                    <div class="gallery-item">
                        <br><br>
                        <img src="information/WhatsApp Image 2024-08-17 at 12.05.01_09562f06.jpg" alt="Image 8">
                        <br><br>
                        <button>Info Device</button>
                        <div class="info-content">
                            <p style="color:white">voltage:Ac110-240V,50-60hz<br>
                                powerwaterproof:180w,IP65<br>
                                light sourcechannel: 54*3w RGB 3 in 1 cree beads,6/8ch<br>
                                control mode:dmx512,auto,master,sound<br>
                                luminous anglenet weight:25<sup>o</sup>,6.5kg
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 col-sm-6">
                    <div class="gallery-item">
                        <img src="information/WhatsApp Image 2024-08-17 at 12.58.11_4d9cb3f6.jpg" alt="Image 9">
                        <br>
                        <button>Info Device</button>
                        <div class="info-content">
                            <p style="color:white">Voltage: AC110-240V,50-60hz<br>
                            POWER:200W<br>light sourcechannel: 2*50w white/warm white COB beads<br>protection class:IP20,heat dissipation by fan<br>control mode:dmx512,master-slave,sound-auto
                            <br>FLASH frequency:1-10 times/second<br>
                            Channel:3/5/7ch<br>
                            beam angle:12<sup>o</sup><br>
                            Features: No clutter,constant current drive and light source<br>
                            Applicable scene:stage,wedding,multi-functional peformance hall,studio etc.
                            </p>
                        </div>
                    </div>
                </div>

    <script>
        document.querySelectorAll('.gallery-item button').forEach(button => {
            button.addEventListener('click', function() {
                const infoContent = this.nextElementSibling; // Select the .info-content element that follows the button

                // Toggle display of the info content
                if (infoContent.style.display === 'block') {
                    infoContent.style.display = 'none'; // Hide if already visible
                } else {
                    document.querySelectorAll('.info-content').forEach(content => {
                        content.style.display = 'none'; // Hide all other info-content elements
                    });
                    infoContent.style.display = 'block'; // Show the clicked one
                }
            });
        });
    </script>
    </body>
    </html>
