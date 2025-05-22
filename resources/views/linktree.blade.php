<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <title>Mitski Linktree</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
  <style>
    body {
      background-color: #000;
      color: white;
      font-family: 'Raleway', sans-serif;
      text-align: center;
      max-width: 600px;
      margin: 0 auto;
    }

    .profile-header {
      width: 100%;
      max-width: 480px;
      margin: 0 auto;
      position: relative;
    }

    .profile-img-full {
      width: 100%;
      display: block;
      border-bottom: 1px solid #333;
    }

    .profile-overlay {
      position: absolute;
      bottom: 30px;
      left: 0;
      right: 0;
      background: linear-gradient(to top, rgba(0, 0, 0, 0.8), transparent);
      padding: 10px 10px 20px;
    }

    .profile-overlay h2 {
      font-size: 1.5rem;
      margin-bottom: 15px;
    }

    .social-icons i {
      font-size: 2rem;
      margin: 10px;
      color: white;
      transition: transform 0.3s ease, color 0.3s ease;
    }

    .social-icons i:hover {
      transform: scale(1.3);
      color: #ffffff;
    }

    .toggle-btns {
      background-color: #444;
      border-radius: 999px;
      display: inline-flex;
      padding: 5px;
      position: relative;
    }

    .toggle-btns button {
      border: none;
      background: transparent;
      color: white;
      padding: 8px 20px;
      border-radius: 999px;
      font-weight: bold;
      transition: all 0.3s ease;
    }

    .toggle-btns button.active {
      background-color: black;
      color: white;
    }

    .link-box {
      background-color: #000;
      color: #fff;
      border: 2px solid #ccc;
      border-radius: 35px;
      padding: 12px 20px;
      box-shadow: 4px 4px 0px #ccc;
      transition: transform 0.1s ease, box-shadow 0.1s ease;
      display: flex;
      align-items: center;
      justify-content: space-between;
      cursor: pointer;
      margin-bottom: 16px;
    }

    .link-box:hover {
      transform: translate(2px, 2px);
      box-shadow: 2px 2px 0px #aaa;
    }

    .shop-box {
      background-color: #000;
      border: 2px solid #ccc;
      box-shadow: 4px 4px 0px #ccc;
      border-radius: 35px;
      padding: 15px;
      margin: 15px auto;
      width: 100%;
      text-align: left;
      color: white;
      cursor: pointer;
    }

    .shop-box1 {
      background-color: #000;
      border: 2px solid #ccc;
      box-shadow: 4px 4px 0px #ccc;
      border-radius: 35px;
      padding: 15px;
      margin: 15px auto;
      width: 100%;
      text-align: left;
      color: white;
      cursor: pointer;
      transition: transform 0.1s ease, box-shadow 0.1s ease;
    }

    .shop-box1:hover {
      transform: translate(2px, 2px);
      box-shadow: 2px 2px 0px #aaa;
    }

    .video-box iframe {
      width: 100%;
      border-radius: 35px;
      border-radius: 35px;
      padding: 12px 20px;
      box-shadow: 4px 4px 0px #ccc;
      transition: transform 0.1s ease, box-shadow 0.1s ease;
      display: flex;
      align-items: center;
      justify-content: space-between;
      cursor: pointer;
      margin-bottom: 16px;
    }

    .video-box iframe:hover {
      transform: translate(2px, 2px);
      box-shadow: 2px 2px 0px #aaa;
    }

    .link-btn {
      background-color: #1a1a1a;
      border: 1px solid #444;
      border-radius: 30px;
      padding: 12px;
      margin: 10px auto;
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      text-decoration: none;
    }

    .link-btn i {
      margin-right: 10px;
    }

    .tab-content>div {
      display: none;
    }

    .tab-content>.active {
      display: block;
    }
    
  </style>
</head>

<body>
  <div class="profile-header">
    <img src="img2/backdrop.png" alt="Profile" class="profile-img-full" />
    <div class="profile-overlay">
      <h2>Mitski <i class="fas fa-check-circle text-primary"></i></h2>
      <div class="social-icons">
        <a href="https://instagram.com/mitskileaks"><i class="fab fa-instagram"></i></a>
        <a href="https://tiktok.com/@mitskileaks"><i class="fab fa-tiktok"></i></a>
        <a href="https://x.com/mitskileaks"><i class="fab fa-twitter"></i></a>
        <a href="https://www.threads.net/@mitskileaks"><i class="fa-brands fa-threads"></i></a>
        <a href="https://www.facebook.com/MitskiLeaks/"><i class="fab fa-facebook"></i></a>
        <a href="https://youtube.com/@mitskileaks"><i class="fab fa-youtube"></i></a>
      </div>
      <div class="toggle-btns">
        <button class="active" onclick="showTab('links', this)">Links</button>
        <button onclick="showTab('shop', this)">Shop</button>
      </div>
    </div>
  </div>

  

  <div class="container">
    <div class="tab-content">
      <div id="links" class="active">
        <a href="https://mitski.lnk.to/TLIIASAW" target="_blank" style="text-decoration: none; color: inherit">
          <div class="link-box d-flex align-items-center">
            <img src="https://images.theskinny.co.uk/assets/production/000/147/097/147097_widescreen.1.jpg"
              alt="The Land Cover" style="
                  width: 50px;
                  height: 50px;
                  object-fit: cover;
                  border-radius: 50%;
                  margin-right: 15px;
                " />
            <div>
              <strong>'The Land Is Inhospitable and So Are We'</strong> Out
              Now
            </div>
          </div>
        </a>

        <div class="video-box mb-4">
          <iframe height="315" src="https://www.youtube.com/embed/xUh7jaB9IZ0?si=LTM1n_qB7sURbVgj" frameborder="0"
            allowfullscreen></iframe>
        </div>

        <div class="shop-box">
          <h5 class="text-center">Official Merch</h5>
          <div id="officialMerchCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="d-flex justify-content-around">
                  <a href="https://merch.mitski.com/accessories/mitski-2024-tour-fanzine" target="_blank"
                    class="text-center text-white" style="text-decoration: none">
                    <img
                      src="https://ugc.production.linktr.ee/b9091bf5-351e-40cb-b4a2-85f1082ead7a_MITSKI-ZINE--0005-Layer-1.png?io=true&size=thumbnail-product-v1_0"
                      class="img-fluid" style="max-height: 150px; border-radius: 10px" />
                    <p class="mt-2">Mitski 2024 Tour Fanzine</p>
                  </a>
                  <a href="https://merch.mitski.com/accessories/mitski-2024-tour-fanzine" target="_blank"
                    class="text-center text-white" style="text-decoration: none">
                    <img
                      src="https://s3.amazonaws.com/dev1.mtimg.com/product_photos/imgs/000/097/241/full/MITSKI_LandIsInhospitable_BlueLP.png?1728674697"
                      class="img-fluid" style="max-height: 150px; border-radius: 10px" />
                    <p class="mt-2">The Land Is Inhospitable Vinyl</p>
                  </a>
                  <a href="https://merch.mitski.com/apparel/the-land-letterman-jacket" target="_blank"
                    class="text-center text-white" style="text-decoration: none">
                    <img
                      src="https://s3.amazonaws.com/dev1.mtimg.com/product_photos/imgs/000/098/471/full/Mitski_Redo__0005_Layer-5.png?1732029101"
                      class="img-fluid" style="max-height: 150px; border-radius: 10px" />
                    <p class="mt-2">The Land Letterman Jacket</p>
                  </a>
                </div>
              </div>
              <div class="carousel-item">
                <div class="d-flex justify-content-around">
                  <a href="https://merch.mitski.com/accessories/the-land-enamel-pin-set" target="_blank"
                    class="text-center text-white" style="text-decoration: none">
                    <img
                      src="https://ugc.production.linktr.ee/d10788eb-81cb-453c-873d-b9bbc0ad7cf1_Mitski-theLandPinSet.png?io=true&size=thumbnail-product-v1_0"
                      class="img-fluid" style="max-height: 150px; border-radius: 10px" />
                    <p class="mt-2">'The Land' Enamel Pin Set</p>
                  </a>
                  <a href="https://merch.mitski.com/accessories/listening-to-mitski-embroidered-beanie" target="_blank"
                    class="text-center text-white" style="text-decoration: none">
                    <img
                      src="https://s3.amazonaws.com/dev1.mtimg.com/product_photos/imgs/000/098/469/full/Mitski_Redo__0003_Layer-3.png?1732028974"
                      class="img-fluid" style="max-height: 150px; border-radius: 10px" />
                    <p class="mt-2">Listening To Mitski Embroidered Beanie</p>
                  </a>
                  <a href="https://merch.mitski.com/apparel/fall-2024-tour-tee-lilac-heather" target="_blank"
                    class="text-center text-white" style="text-decoration: none">
                    <img
                      src="https://s3.amazonaws.com/dev1.mtimg.com/product_photos/imgs/000/095/419/full/MITSKI_Fall2024LilacTourTee-1.png?1723229982"
                      class="img-fluid" style="max-height: 150px; border-radius: 10px" />
                    <p class="mt-2">Fall 2024 Tour Tee (Lilac Heather)</p>
                  </a>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#officialMerchCarousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#officialMerchCarousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>

        <a href="https://merch.mitski.com/" target="_blank" style="text-decoration: none; color: inherit;">
          <div class="link-box d-flex align-items-center">
            <img src="img2/mail.png" alt="Website Cover" style="
                  width: 50px;
                  height: 50px;
                  object-fit: cover;
                  border-radius: 50%;
                  margin-right: 15px;
                " />
            <div>Join The Mailing List</div>
          </div>
        </a>

        <a href="https://merch.mitski.com/" target="_blank" style="text-decoration: none; color: inherit;">
          <div class="link-box d-flex align-items-center">
            <img src="img2/backdrop.png" alt="Website Cover" style="
                width: 50px;
                height: 50px;
                object-fit: cover;
                border-radius: 50%;
                margin-right: 15px;
              " />
            <div>Official Website</div>
          </div>
      </div>
      </a>

      <div id="shop">
        <div class="shop-box1" style="cursor: pointer;" onclick="openModal('apparelModal')">
          <h5 class="text-center">Apparel</h5>
          <div class="d-flex justify-content-around mt-3">
            <img
              src="https://ugc.production.linktr.ee/6175b371-eb4c-4b18-97bb-446a3cea28ac_MITSKI-ListeningDadHat.png?io=true&size=square-fit"
              class="img-fluid" style="border-radius: 10px; max-height: 100px; width: 30%; object-fit: contain;" />
            <img
              src="https://ugc.production.linktr.ee/9eed0b42-d2a9-4993-931a-500d31e76af3_MITSKI-OliviaRetroTee.png?io=true&size=square-fit"
              class="img-fluid" style="border-radius: 10px; max-height: 100px; width: 30%; object-fit: contain;" />
            <img
              src="https://ugc.production.linktr.ee/fdd3ad59-0511-4cfb-a63a-91c7ada9c966_MITSKI-TourPOH-1.png?io=true&size=square-fit"
              class="img-fluid" style="border-radius: 10px; max-height: 100px; width: 30%; object-fit: contain;" />
          </div>
          <p class="text-center mt-2">5 Products</p>
        </div>
        <div class="shop-box1" style="cursor: pointer;" onclick="openModal('accessoriesModal')">
          <h5 class="text-center">Accessories</h5>
          <div class="d-flex justify-content-around mt-3">
            <img
              src="https://ugc.production.linktr.ee/6175b371-eb4c-4b18-97bb-446a3cea28ac_MITSKI-ListeningDadHat.png?io=true&size=square-fit"
              class="img-fluid" style="border-radius: 10px; max-height: 100px; width: 30%; object-fit: contain;" />
            <img
              src="https://ugc.production.linktr.ee/ff51e320-7f90-457b-8bee-164b30ab998c_MITSKI-ArmsUpTote.png?io=true&size=square-fit"
              class="img-fluid" style="border-radius: 10px; max-height: 100px; width: 30%; object-fit: contain;" />
            <img
              src="https://ugc.production.linktr.ee/0ab5f101-0a95-4926-bf31-433236ad5a0e_MITSKI-MugRedo3.png?io=true&size=square-fit"
              class="img-fluid" style="border-radius: 10px; max-height: 100px; width: 30%; object-fit: contain;" />
          </div>
          <p class="text-center mt-2">5 Products</p>
        </div>
      </div>

      <div id="apparelModal" class="modal"
        style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.85); overflow:auto; z-index:1050;">
        <div class="container py-5">
          <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="text-white">Apparel</h4>
            <button onclick="closeModal('apparelModal')" class="btn btn-light">X</button>
          </div>
          <div class="d-flex flex-wrap justify-content-around">
            <div class="text-center text-white p-3">
              <img
                src="https://ugc.production.linktr.ee/26eb41ec-1070-4a2b-afec-8d657c4fe06f_MITSKI-TourTee2-2.png?io=true&size=square-fit"
                class="img-fluid" style="border-radius: 10px; max-height: 200px" />
              <p class="mt-2">Spring 2024 Tour Tee</p>
            </div>
            <div class="text-center text-white p-3">
              <img
                src="https://ugc.production.linktr.ee/9eed0b42-d2a9-4993-931a-500d31e76af3_MITSKI-OliviaRetroTee.png?io=true&size=square-fit"
                class="img-fluid" style="border-radius: 10px; max-height: 200px" />
              <p class="mt-2">Stars Retro Tee</p>
            </div>
            <div class="text-center text-white p-3">
              <img
                src="https://ugc.production.linktr.ee/fdd3ad59-0511-4cfb-a63a-91c7ada9c966_MITSKI-TourPOH-1.png?io=true&size=square-fit"
                class="img-fluid" style="border-radius: 10px; max-height: 200px" />
              <p class="mt-2">Spring 2024 Tour Hoodie</p>
            </div>
            <div class="text-center text-white p-3">
              <img
                src="https://ugc.production.linktr.ee/f7ecefcf-3277-4afe-8486-50ce3e423148_MITSKI-ChairCropCN-1.png?io=true&size=square-fit"
                class="img-fluid" style="border-radius: 10px; max-height: 200px" />
              <p class="mt-2">My Love Mine All Mine Cropped Pullover
                Sweatshirt</p>
            </div>
            <div class="text-center text-white p-3">
              <img
                src="https://ugc.production.linktr.ee/0df088f6-e9a4-411e-a1d2-b994a21e04a5_MITSKI-ChairCN-1.png?io=true&size=square-fit"
                class="img-fluid" style="border-radius: 10px; max-height: 200px" />
              <p class="mt-2">My Love Mine All Mine Crewneck (Navy)</p>
            </div>
          </div>
        </div>
      </div>

      <div id="accessoriesModal" class="modal"
        style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.85); overflow:auto; z-index:1050;">
        <div class="container py-5">
          <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="text-white">Accessories</h4>
            <button onclick="closeModal('accessoriesModal')" class="btn btn-light">X</button>
          </div>
          <div class="d-flex flex-wrap justify-content-around">
            <div class="text-center text-white p-3">
              <img
                src="https://ugc.production.linktr.ee/6175b371-eb4c-4b18-97bb-446a3cea28ac_MITSKI-ListeningDadHat.png?io=true&size=square-fit"
                class="img-fluid" style="border-radius: 10px; max-height: 200px" />
              <p class="mt-2">Listening to Mitski Hat</p>
            </div>
            <div class="text-center text-white p-3">
              <img
                src="https://ugc.production.linktr.ee/ff51e320-7f90-457b-8bee-164b30ab998c_MITSKI-ArmsUpTote.png?io=true&size=square-fit"
                class="img-fluid" style="border-radius: 10px; max-height: 200px" />
              <p class="mt-2">Open Arms Tote Bag</p>
            </div>
            <div class="text-center text-white p-3">
              <img
                src="https://ugc.production.linktr.ee/0ab5f101-0a95-4926-bf31-433236ad5a0e_MITSKI-MugRedo3.png?io=true&size=square-fit"
                class="img-fluid" style="border-radius: 10px; max-height: 200px" />
              <p class="mt-2">My Love Mine All MineCoffee Mug</p>
            </div>
            <div class="text-center text-white p-3">
              <img
                src="https://ugc.production.linktr.ee/dd25ba3d-e788-4db5-afb1-7eef9e651f9a_Mitski-Socks-01.png?io=true&size=square-fit"
                class="img-fluid" style="border-radius: 10px; max-height: 200px" />
              <p class="mt-2">My Love Mine All Mine Socks</p>
            </div>
            <div class="text-center text-white p-3">
              <img
                src="https://ugc.production.linktr.ee/70d57b96-786f-4943-bd44-77bc4e1451c5_mitski-textbeanie.png?io=true&size=square-fit"
                class="img-fluid" style="border-radius: 10px; max-height: 200px" />
              <p class="mt-2">Text Beanie</p>
            </div>
          </div>
        </div>
      </div>

      <script>
        function openModal(id) {
          document.getElementById(id).style.display = "block";
        }
        function closeModal(id) {
          document.getElementById(id).style.display = "none";
        }
      </script>
    </div>
  </div>

  <script>
    function showTab(tabId, btn) {
      document
        .querySelectorAll(".tab-content > div")
        .forEach((div) => div.classList.remove("active"));
      document.getElementById(tabId).classList.add("active");

      document
        .querySelectorAll(".toggle-btns button")
        .forEach((b) => b.classList.remove("active"));
      btn.classList.add("active");
    }
  </script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>