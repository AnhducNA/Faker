<?php
require_once 'vendor/autoload.php';
require 'oop/Faker/Provider/News.php';

$newsObject = new \oop\Faker\Provider\News();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
          name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <title>Review Nhà</title>
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link crossorigin href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
          rel="stylesheet">
</head>
<body>
<header class="header" id="header">
    <div class="header__navbar navbar navbar-expand-lg">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">Mua nhà</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Thuê nhà</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Khám phá</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link active" href="#">Blog</a>
            </li>
        </ul>
    </div>
    <div class="d-flex align-items-center">
        <div class="header__menu-md" id="menu_md">
            <img alt="menu-md.png" src="assets/images/menu-md.png">
        </div>

        <div class="header__logo">
            <p>
                <svg class="w-100" fill="none" height="20" viewBox="0 0 140 20" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_1762_350)">
                        <path d="M0.558089 2.62398L2.3128 3.67141L2.27258 1.87793H3.4692L3.42898 3.64176L5.10325 2.63386L5.77195 3.53307L3.90663 4.56074L5.77195 5.56864L5.10325 6.47773L3.42898 5.46983L3.45915 7.23366H2.27258L2.30275 5.46983L0.558089 6.48761L0 5.56864L1.8251 4.56074C1.6793 4.48168 1.52343 4.40263 1.36254 4.3137C1.20668 4.22477 1.04579 4.13583 0.884898 4.0469C0.729036 3.95797 0.573173 3.87398 0.41731 3.78999C0.266475 3.70599 0.125696 3.62694 0 3.55283L0.558089 2.62398Z"
                              fill="#3B4144"/>
                        <path d="M14.41 1.87207C15.5664 1.87207 16.5719 2.00053 17.4216 2.25745C18.2764 2.51436 18.9853 2.87503 19.5434 3.33452C20.1065 3.79895 20.5238 4.35725 20.8003 5.01436C21.0769 5.67148 21.2177 6.40764 21.2177 7.22286C21.2177 8.47286 20.8607 9.54994 20.1417 10.459C19.4277 11.3731 18.3367 12.0104 16.8736 12.376L22.0472 19.545H18.3116L13.4547 12.6379H9.86481V19.545H6.64197V1.87207H14.41ZM9.86983 4.55488V9.95013H14.239C15.5563 9.95013 16.5116 9.69816 17.1049 9.18926C17.6982 8.68531 17.9948 8.03808 17.9948 7.24756C17.9948 6.49164 17.7032 5.85428 17.1149 5.33057C16.5267 4.80685 15.5714 4.545 14.234 4.545H9.86983V4.55488Z"
                              fill="#3B4144"/>
                        <path d="M26.492 15.0841C26.8339 15.756 27.3769 16.2501 28.126 16.5712C28.8752 16.8924 29.7098 17.0505 30.6399 17.0505C31.4695 17.0505 32.4399 16.8331 33.5561 16.3934C34.6723 15.9537 35.9695 15.1829 37.4476 14.0811V17.4408C36.4572 18.256 35.3913 18.8884 34.2499 19.3331C33.1086 19.7827 31.8718 20.005 30.5394 20.005C29.4634 20.005 28.4629 19.842 27.5378 19.511C26.6127 19.1849 25.8082 18.7254 25.1345 18.1325C24.4607 17.5396 23.9278 16.8232 23.5356 15.9882C23.1435 15.1483 22.9524 14.2195 22.9524 13.1967C22.9524 12.1888 23.1434 11.2699 23.5256 10.4398C23.9077 9.60978 24.4356 8.89338 25.1144 8.29556C25.7881 7.69773 26.5925 7.2333 27.5177 6.90227C28.4428 6.57619 29.4534 6.4082 30.5444 6.4082C31.6505 6.4082 32.641 6.56631 33.5108 6.87757C34.3807 7.18884 35.1197 7.62362 35.7181 8.18686C36.3214 8.74516 36.784 9.41216 37.1108 10.178C37.4376 10.9438 37.5985 11.7837 37.5985 12.6977L26.492 15.0841ZM30.6399 9.35287C30.102 9.35287 29.5891 9.42204 29.1014 9.55544C28.6137 9.69378 28.1763 9.88646 27.7841 10.1434C27.392 10.4003 27.0601 10.7116 26.7836 11.0772C26.5071 11.4428 26.311 11.8627 26.1953 12.3222L34.0036 10.6424C33.7421 10.3064 33.3349 10.005 32.7717 9.74318C32.2086 9.48133 31.4997 9.35287 30.6399 9.35287Z"
                              fill="#3B4144"/>
                        <path d="M44.8433 19.4958C43.9634 19.145 43.1741 18.6608 42.4651 18.0433C41.7562 17.4257 41.1529 16.6944 40.6601 15.8348C40.1624 14.98 39.7803 14.0067 39.5138 12.9197C39.2473 11.8328 39.1116 10.6519 39.1116 9.3723V6.85254H42.2339V9.3723C42.2339 10.2221 42.3143 11.0373 42.4802 11.8328C42.6411 12.6233 42.8774 13.3496 43.1891 14.0017C43.4958 14.6589 43.878 15.227 44.3254 15.7162C44.7729 16.2053 45.2807 16.566 45.8489 16.8081C46.417 16.566 46.9248 16.2053 47.3723 15.7162C47.8198 15.227 48.1918 14.6589 48.4935 14.0017C48.7952 13.3446 49.0265 12.6233 49.1873 11.8328C49.3482 11.0423 49.4337 10.2221 49.4337 9.3723V6.85254H52.5811V9.3723C52.5811 11.9464 52.0582 14.1006 51.0074 15.8348C49.9566 17.5689 48.5237 18.8041 46.6986 19.5403H45.1349L44.8433 19.4958Z"
                              fill="#3B4144"/>
                        <path d="M54.0948 4.53102C54.0948 4.00237 54.2909 3.5577 54.6781 3.18715C55.0703 2.82154 55.5479 2.63379 56.116 2.63379C56.6842 2.63379 57.1669 2.8166 57.554 3.18715C57.9462 3.55276 58.1423 4.00237 58.1423 4.53102C58.1423 5.0745 57.9462 5.52905 57.554 5.8996C57.1618 6.26521 56.6842 6.45296 56.116 6.45296C55.5479 6.45296 55.0652 6.27015 54.6781 5.8996C54.2859 5.53399 54.0948 5.0745 54.0948 4.53102ZM54.6027 6.8581H57.7249V19.5458H54.6027V6.8581Z"
                              fill="#3B4144"/>
                        <path d="M63.1952 15.0841C63.5371 15.756 64.0801 16.2501 64.8293 16.5712C65.5784 16.8924 66.413 17.0505 67.3432 17.0505C68.1728 17.0505 69.1432 16.8331 70.2593 16.3934C71.3755 15.9537 72.6727 15.1829 74.1509 14.0811V17.4408C73.1604 18.256 72.0945 18.8884 70.9532 19.3331C69.8119 19.7827 68.575 20.005 67.2426 20.005C66.1667 20.005 65.1661 19.842 64.241 19.511C63.3159 19.1849 62.5114 18.7254 61.8377 18.1325C61.164 17.5396 60.631 16.8232 60.2389 15.9882C59.8467 15.1483 59.6556 14.2195 59.6556 13.1967C59.6556 12.1888 59.8467 11.2699 60.2288 10.4398C60.6109 9.60978 61.1388 8.89338 61.8176 8.29556C62.4913 7.69773 63.2958 7.2333 64.2209 6.90227C65.146 6.57619 66.1566 6.4082 67.2477 6.4082C68.3538 6.4082 69.3443 6.56631 70.2141 6.87757C71.0839 7.18884 71.823 7.62362 72.4213 8.18686C73.0246 8.74516 73.4872 9.41216 73.814 10.178C74.1408 10.9438 74.3017 11.7837 74.3017 12.6977L63.1952 15.0841ZM67.3432 9.35287C66.8052 9.35287 66.2924 9.42204 65.8047 9.55544C65.317 9.69378 64.8796 9.88646 64.4874 10.1434C64.0952 10.4003 63.7634 10.7116 63.4868 11.0772C63.2103 11.4428 63.0142 11.8627 62.8986 12.3222L70.7068 10.6424C70.4454 10.3064 70.0381 10.005 69.475 9.74318C68.9119 9.48133 68.208 9.35287 67.3432 9.35287Z"
                              fill="#3B4144"/>
                        <path d="M78.9372 15.2023C78.9372 16.4325 79.5958 17.0501 80.9131 17.0501C81.3355 17.0501 81.7628 17.0007 82.1952 16.892C82.6276 16.7882 82.9947 16.6351 83.3064 16.4226V6.85742H86.4287V16.4276C86.7354 16.6054 87.1124 16.7537 87.5499 16.8722C87.9873 16.9908 88.4096 17.0501 88.8169 17.0501C90.1342 17.0501 90.7928 16.4325 90.7928 15.2023V6.85742H93.9151V15.2023C93.9151 16.7043 93.4726 17.8801 92.5827 18.725C91.6978 19.5699 90.4409 19.9948 88.8118 19.9948C88.2085 19.9948 87.5549 19.8811 86.846 19.6588C86.137 19.4365 85.4734 19.1301 84.8549 18.7497C84.2365 19.1351 83.5728 19.4365 82.8639 19.6588C82.155 19.8811 81.5014 19.9948 80.898 19.9948C79.269 19.9948 78.0121 19.5699 77.1272 18.725C76.2423 17.8801 75.7948 16.7043 75.7948 15.2023V6.85742H78.9372V15.2023Z"
                              fill="#3B4144"/>
                        <path d="M106.052 12.5446C106.052 11.5713 105.766 10.7956 105.197 10.2175C104.629 9.64443 103.865 9.35292 102.905 9.35292C102.141 9.35292 101.371 9.43198 100.597 9.59502C99.8227 9.75312 99.144 9.99522 98.5608 10.3164V19.5506H95.4385V9.16024C95.896 8.76004 96.4139 8.38949 97.0021 8.04364C97.5854 7.69779 98.2038 7.40628 98.8574 7.16913C99.506 6.92704 100.18 6.73929 100.869 6.60589C101.562 6.47249 102.241 6.40332 102.905 6.40332C103.85 6.40332 104.705 6.55154 105.479 6.84798C106.253 7.14443 106.912 7.55945 107.47 8.09304C108.023 8.63158 108.45 9.27387 108.752 10.0249C109.054 10.7758 109.205 11.6158 109.205 12.5446V19.5456H106.057V12.5446H106.052Z"
                              fill="#3B4144"/>
                        <path d="M110.713 1.20117H113.835V7.24366C114.519 6.98674 115.253 6.78418 116.043 6.63101C116.832 6.47785 117.586 6.40374 118.3 6.40374C119.275 6.40374 120.16 6.55196 120.95 6.8484C121.739 7.14485 122.413 7.55987 122.976 8.09346C123.539 8.632 123.966 9.27429 124.268 10.0253C124.57 10.7763 124.721 11.6162 124.721 12.545V19.546H121.573V12.545C121.573 11.5717 121.282 10.796 120.693 10.218C120.105 9.64485 119.311 9.35335 118.3 9.35335C117.566 9.35335 116.792 9.44722 115.967 9.63991C115.148 9.83259 114.434 10.0796 113.83 10.386V19.546H110.708V1.20117H110.713Z"
                              fill="#3B4144"/>
                        <path d="M131.211 0L137.215 5.75593L136.31 6.78854C137.446 7.15415 138.346 7.78162 139.005 8.66107C139.663 9.54051 139.995 10.6818 139.995 12.0899V17.2233C139.07 18.0534 138.014 18.7253 136.833 19.2391C135.651 19.753 134.379 20.0049 133.011 20.0049C132.066 20.0049 131.181 19.9111 130.352 19.7184C129.522 19.5257 128.803 19.2391 128.19 18.8538C127.581 18.4684 127.099 17.9891 126.752 17.4012C126.4 16.8182 126.229 16.1364 126.229 15.3508C126.229 14.5356 126.4 13.8291 126.742 13.2263C127.084 12.6285 127.541 12.1344 128.119 11.749C128.698 11.3636 129.366 11.082 130.13 10.8992C130.895 10.7164 131.699 10.6225 132.549 10.6225C133.459 10.6225 134.273 10.6917 134.987 10.8251C135.701 10.9634 136.32 11.1413 136.843 11.3636V11.0771C136.843 10.6126 136.586 10.2075 136.073 9.8666C135.561 9.52075 134.766 9.35277 133.695 9.35277C132.685 9.35277 131.654 9.48123 130.598 9.73814C129.542 9.99506 128.411 10.4743 127.204 11.1759V8.0336C128.129 7.50494 129.11 7.0998 130.13 6.82312C131.156 6.5415 132.343 6.40316 133.695 6.40316H134.012L129.009 2.15909L131.211 0ZM129.356 15.3508C129.356 15.6522 129.452 15.914 129.648 16.1314C129.844 16.3488 130.11 16.5217 130.452 16.6601C130.794 16.7984 131.186 16.8972 131.624 16.9615C132.061 17.0257 132.529 17.0553 133.016 17.0553C133.73 17.0553 134.409 16.9713 135.053 16.8034C135.696 16.6354 136.295 16.4081 136.848 16.1215V14.3725C136.083 14.0514 135.344 13.8192 134.64 13.6759C133.937 13.5326 133.268 13.4585 132.649 13.4585C131.689 13.4585 130.9 13.6215 130.281 13.9476C129.668 14.2737 129.356 14.7431 129.356 15.3508Z"
                              fill="#3B4144"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_1762_350">
                            <rect fill="white" height="20" width="140"/>
                        </clipPath>
                    </defs>
                </svg>
            </p>
        </div>
    </div>
    <div class="header__navbar2 d-flex justify-content-around">
        <a class="icon icon-notification align-middle">
            <i class="fa-solid fa-bell"></i>
        </a>

        <a class="icon align-middle" href="#">
            <i class="fa-solid fa-heart"></i>
        </a>

        <a class="btn-add_post btn btn-danger" href="#">Đăng bài</a>
        <div class="name-post">
            <p class="p-name">Quang Anh Tran</p>
            <p>Tư vấn</p>
        </div>
        <div class="avatar">
            <img alt="avartar.png" src="assets/images/avartar.png">
        </div>
    </div>
</header>
<div class="dropdown-menu-md" id="show_menu_md">
    <div class="w-100 h-100 position-relative">
        <div class="box-top">
            <a class="btn-close-menu-md btn-outline-dark" href="#" id="btn_close_menu_md">
                <svg fill="none" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                    <rect fill="#3B4144" height="4" rx="2" transform="rotate(-45 1.74707 19.5459)" width="25"
                          x="1.74707"
                          y="19.5459"/>
                    <rect fill="#3B4144" height="4" rx="2" transform="rotate(45 4.5752 1.62598)" width="25" x="4.5752"
                          y="1.62598"/>
                </svg>
            </a>
            <a href="#">
                <svg fill="none" height="20" viewBox="0 0 140 20" width="133" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_1762_350)">
                        <path d="M0.558089 2.62398L2.3128 3.67141L2.27258 1.87793H3.4692L3.42898 3.64176L5.10325 2.63386L5.77195 3.53307L3.90663 4.56074L5.77195 5.56864L5.10325 6.47773L3.42898 5.46983L3.45915 7.23366H2.27258L2.30275 5.46983L0.558089 6.48761L0 5.56864L1.8251 4.56074C1.6793 4.48168 1.52343 4.40263 1.36254 4.3137C1.20668 4.22477 1.04579 4.13583 0.884898 4.0469C0.729036 3.95797 0.573173 3.87398 0.41731 3.78999C0.266475 3.70599 0.125696 3.62694 0 3.55283L0.558089 2.62398Z"
                              fill="#3B4144"/>
                        <path d="M14.41 1.87207C15.5664 1.87207 16.5719 2.00053 17.4216 2.25745C18.2764 2.51436 18.9853 2.87503 19.5434 3.33452C20.1065 3.79895 20.5238 4.35725 20.8003 5.01436C21.0769 5.67148 21.2177 6.40764 21.2177 7.22286C21.2177 8.47286 20.8607 9.54994 20.1417 10.459C19.4277 11.3731 18.3367 12.0104 16.8736 12.376L22.0472 19.545H18.3116L13.4547 12.6379H9.86481V19.545H6.64197V1.87207H14.41ZM9.86983 4.55488V9.95013H14.239C15.5563 9.95013 16.5116 9.69816 17.1049 9.18926C17.6982 8.68531 17.9948 8.03808 17.9948 7.24756C17.9948 6.49164 17.7032 5.85428 17.1149 5.33057C16.5267 4.80685 15.5714 4.545 14.234 4.545H9.86983V4.55488Z"
                              fill="#3B4144"/>
                        <path d="M26.492 15.0841C26.8339 15.756 27.3769 16.2501 28.126 16.5712C28.8752 16.8924 29.7098 17.0505 30.6399 17.0505C31.4695 17.0505 32.4399 16.8331 33.5561 16.3934C34.6723 15.9537 35.9695 15.1829 37.4476 14.0811V17.4408C36.4572 18.256 35.3913 18.8884 34.2499 19.3331C33.1086 19.7827 31.8718 20.005 30.5394 20.005C29.4634 20.005 28.4629 19.842 27.5378 19.511C26.6127 19.1849 25.8082 18.7254 25.1345 18.1325C24.4607 17.5396 23.9278 16.8232 23.5356 15.9882C23.1435 15.1483 22.9524 14.2195 22.9524 13.1967C22.9524 12.1888 23.1434 11.2699 23.5256 10.4398C23.9077 9.60978 24.4356 8.89338 25.1144 8.29556C25.7881 7.69773 26.5925 7.2333 27.5177 6.90227C28.4428 6.57619 29.4534 6.4082 30.5444 6.4082C31.6505 6.4082 32.641 6.56631 33.5108 6.87757C34.3807 7.18884 35.1197 7.62362 35.7181 8.18686C36.3214 8.74516 36.784 9.41216 37.1108 10.178C37.4376 10.9438 37.5985 11.7837 37.5985 12.6977L26.492 15.0841ZM30.6399 9.35287C30.102 9.35287 29.5891 9.42204 29.1014 9.55544C28.6137 9.69378 28.1763 9.88646 27.7841 10.1434C27.392 10.4003 27.0601 10.7116 26.7836 11.0772C26.5071 11.4428 26.311 11.8627 26.1953 12.3222L34.0036 10.6424C33.7421 10.3064 33.3349 10.005 32.7717 9.74318C32.2086 9.48133 31.4997 9.35287 30.6399 9.35287Z"
                              fill="#3B4144"/>
                        <path d="M44.8433 19.4958C43.9634 19.145 43.1741 18.6608 42.4651 18.0433C41.7562 17.4257 41.1529 16.6944 40.6601 15.8348C40.1624 14.98 39.7803 14.0067 39.5138 12.9197C39.2473 11.8328 39.1116 10.6519 39.1116 9.3723V6.85254H42.2339V9.3723C42.2339 10.2221 42.3143 11.0373 42.4802 11.8328C42.6411 12.6233 42.8774 13.3496 43.1891 14.0017C43.4958 14.6589 43.878 15.227 44.3254 15.7162C44.7729 16.2053 45.2807 16.566 45.8489 16.8081C46.417 16.566 46.9248 16.2053 47.3723 15.7162C47.8198 15.227 48.1918 14.6589 48.4935 14.0017C48.7952 13.3446 49.0265 12.6233 49.1873 11.8328C49.3482 11.0423 49.4337 10.2221 49.4337 9.3723V6.85254H52.5811V9.3723C52.5811 11.9464 52.0582 14.1006 51.0074 15.8348C49.9566 17.5689 48.5237 18.8041 46.6986 19.5403H45.1349L44.8433 19.4958Z"
                              fill="#3B4144"/>
                        <path d="M54.0948 4.53102C54.0948 4.00237 54.2909 3.5577 54.6781 3.18715C55.0703 2.82154 55.5479 2.63379 56.116 2.63379C56.6842 2.63379 57.1669 2.8166 57.554 3.18715C57.9462 3.55276 58.1423 4.00237 58.1423 4.53102C58.1423 5.0745 57.9462 5.52905 57.554 5.8996C57.1618 6.26521 56.6842 6.45296 56.116 6.45296C55.5479 6.45296 55.0652 6.27015 54.6781 5.8996C54.2859 5.53399 54.0948 5.0745 54.0948 4.53102ZM54.6027 6.8581H57.7249V19.5458H54.6027V6.8581Z"
                              fill="#3B4144"/>
                        <path d="M63.1952 15.0841C63.5371 15.756 64.0801 16.2501 64.8293 16.5712C65.5784 16.8924 66.413 17.0505 67.3432 17.0505C68.1728 17.0505 69.1432 16.8331 70.2593 16.3934C71.3755 15.9537 72.6727 15.1829 74.1509 14.0811V17.4408C73.1604 18.256 72.0945 18.8884 70.9532 19.3331C69.8119 19.7827 68.575 20.005 67.2426 20.005C66.1667 20.005 65.1661 19.842 64.241 19.511C63.3159 19.1849 62.5114 18.7254 61.8377 18.1325C61.164 17.5396 60.631 16.8232 60.2389 15.9882C59.8467 15.1483 59.6556 14.2195 59.6556 13.1967C59.6556 12.1888 59.8467 11.2699 60.2288 10.4398C60.6109 9.60978 61.1388 8.89338 61.8176 8.29556C62.4913 7.69773 63.2958 7.2333 64.2209 6.90227C65.146 6.57619 66.1566 6.4082 67.2477 6.4082C68.3538 6.4082 69.3443 6.56631 70.2141 6.87757C71.0839 7.18884 71.823 7.62362 72.4213 8.18686C73.0246 8.74516 73.4872 9.41216 73.814 10.178C74.1408 10.9438 74.3017 11.7837 74.3017 12.6977L63.1952 15.0841ZM67.3432 9.35287C66.8052 9.35287 66.2924 9.42204 65.8047 9.55544C65.317 9.69378 64.8796 9.88646 64.4874 10.1434C64.0952 10.4003 63.7634 10.7116 63.4868 11.0772C63.2103 11.4428 63.0142 11.8627 62.8986 12.3222L70.7068 10.6424C70.4454 10.3064 70.0381 10.005 69.475 9.74318C68.9119 9.48133 68.208 9.35287 67.3432 9.35287Z"
                              fill="#3B4144"/>
                        <path d="M78.9372 15.2023C78.9372 16.4325 79.5958 17.0501 80.9131 17.0501C81.3355 17.0501 81.7628 17.0007 82.1952 16.892C82.6276 16.7882 82.9947 16.6351 83.3064 16.4226V6.85742H86.4287V16.4276C86.7354 16.6054 87.1124 16.7537 87.5499 16.8722C87.9873 16.9908 88.4096 17.0501 88.8169 17.0501C90.1342 17.0501 90.7928 16.4325 90.7928 15.2023V6.85742H93.9151V15.2023C93.9151 16.7043 93.4726 17.8801 92.5827 18.725C91.6978 19.5699 90.4409 19.9948 88.8118 19.9948C88.2085 19.9948 87.5549 19.8811 86.846 19.6588C86.137 19.4365 85.4734 19.1301 84.8549 18.7497C84.2365 19.1351 83.5728 19.4365 82.8639 19.6588C82.155 19.8811 81.5014 19.9948 80.898 19.9948C79.269 19.9948 78.0121 19.5699 77.1272 18.725C76.2423 17.8801 75.7948 16.7043 75.7948 15.2023V6.85742H78.9372V15.2023Z"
                              fill="#3B4144"/>
                        <path d="M106.052 12.5446C106.052 11.5713 105.766 10.7956 105.197 10.2175C104.629 9.64443 103.865 9.35292 102.905 9.35292C102.141 9.35292 101.371 9.43198 100.597 9.59502C99.8227 9.75312 99.144 9.99522 98.5608 10.3164V19.5506H95.4385V9.16024C95.896 8.76004 96.4139 8.38949 97.0021 8.04364C97.5854 7.69779 98.2038 7.40628 98.8574 7.16913C99.506 6.92704 100.18 6.73929 100.869 6.60589C101.562 6.47249 102.241 6.40332 102.905 6.40332C103.85 6.40332 104.705 6.55154 105.479 6.84798C106.253 7.14443 106.912 7.55945 107.47 8.09304C108.023 8.63158 108.45 9.27387 108.752 10.0249C109.054 10.7758 109.205 11.6158 109.205 12.5446V19.5456H106.057V12.5446H106.052Z"
                              fill="#3B4144"/>
                        <path d="M110.713 1.20117H113.835V7.24366C114.519 6.98674 115.253 6.78418 116.043 6.63101C116.832 6.47785 117.586 6.40374 118.3 6.40374C119.275 6.40374 120.16 6.55196 120.95 6.8484C121.739 7.14485 122.413 7.55987 122.976 8.09346C123.539 8.632 123.966 9.27429 124.268 10.0253C124.57 10.7763 124.721 11.6162 124.721 12.545V19.546H121.573V12.545C121.573 11.5717 121.282 10.796 120.693 10.218C120.105 9.64485 119.311 9.35335 118.3 9.35335C117.566 9.35335 116.792 9.44722 115.967 9.63991C115.148 9.83259 114.434 10.0796 113.83 10.386V19.546H110.708V1.20117H110.713Z"
                              fill="#3B4144"/>
                        <path d="M131.211 0L137.215 5.75593L136.31 6.78854C137.446 7.15415 138.346 7.78162 139.005 8.66107C139.663 9.54051 139.995 10.6818 139.995 12.0899V17.2233C139.07 18.0534 138.014 18.7253 136.833 19.2391C135.651 19.753 134.379 20.0049 133.011 20.0049C132.066 20.0049 131.181 19.9111 130.352 19.7184C129.522 19.5257 128.803 19.2391 128.19 18.8538C127.581 18.4684 127.099 17.9891 126.752 17.4012C126.4 16.8182 126.229 16.1364 126.229 15.3508C126.229 14.5356 126.4 13.8291 126.742 13.2263C127.084 12.6285 127.541 12.1344 128.119 11.749C128.698 11.3636 129.366 11.082 130.13 10.8992C130.895 10.7164 131.699 10.6225 132.549 10.6225C133.459 10.6225 134.273 10.6917 134.987 10.8251C135.701 10.9634 136.32 11.1413 136.843 11.3636V11.0771C136.843 10.6126 136.586 10.2075 136.073 9.8666C135.561 9.52075 134.766 9.35277 133.695 9.35277C132.685 9.35277 131.654 9.48123 130.598 9.73814C129.542 9.99506 128.411 10.4743 127.204 11.1759V8.0336C128.129 7.50494 129.11 7.0998 130.13 6.82312C131.156 6.5415 132.343 6.40316 133.695 6.40316H134.012L129.009 2.15909L131.211 0ZM129.356 15.3508C129.356 15.6522 129.452 15.914 129.648 16.1314C129.844 16.3488 130.11 16.5217 130.452 16.6601C130.794 16.7984 131.186 16.8972 131.624 16.9615C132.061 17.0257 132.529 17.0553 133.016 17.0553C133.73 17.0553 134.409 16.9713 135.053 16.8034C135.696 16.6354 136.295 16.4081 136.848 16.1215V14.3725C136.083 14.0514 135.344 13.8192 134.64 13.6759C133.937 13.5326 133.268 13.4585 132.649 13.4585C131.689 13.4585 130.9 13.6215 130.281 13.9476C129.668 14.2737 129.356 14.7431 129.356 15.3508Z"
                              fill="#3B4144"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_1762_350">
                            <rect fill="white" height="20" width="140"/>
                        </clipPath>
                    </defs>
                </svg>
            </a>
        </div>
        <div class="box-content">
            <div class="header__navbar navbar navbar-expand-lg">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Mua nhà</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Thuê nhà</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Khám phá</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link active" href="#">Blog</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="box-bottom">
            <a class="box-addPost btn btn-danger" href="javascript:">Đăng bài</a>
            <div class="box-user d-flex justify-content-between w-100">
                <a class="btn btn-light" href="javascript:">Đăng nhập</a>
                <a class="btn btn-dark" href="javascript:">Đăng ký</a>
            </div>
        </div>
    </div>
</div>
<div class="detail-page" id="content">
    <div class="container">
        <div class="box">
            <div class="d-flex justify-content-between align-items-center" style="margin-bottom: 20px">
                <a href="index.php">
                    <span class="icon-return d-inline">
                        <i class="fa-solid fa-angle-left"></i>
                    </span>
                    <p class="p-return d-inline">Quay lại</p>
                </a>
                <div>
                    <a class="btn btn-darkgreen" href="javascript: ">xã hội</a>
                </div>

            </div>
            <div class="box-content">
                <p class="p-headding"><?php echo $newsObject->fakeTitle(300) ?></p>
                <div class="d-flex justify-content-between flex-column flex-md-row text-center">
                    <ul>
                        <li><a href="#"><p>Xã hội</p></a></li>
                        <li><span class="dot"><svg fill="none" height="4" viewBox="0 0 3 4" width="3"
                                                   xmlns="http://www.w3.org/2000/svg">
                                <circle cx="1.5" cy="1.56641" fill="#3B4144" r="1.5"/></svg></span></li>
                        <li><p><?php echo $newsObject->fakeName()?></p></li>
                        <li><span class="dot"><svg fill="none" height="4" viewBox="0 0 3 4" width="3"
                                                   xmlns="http://www.w3.org/2000/svg">
                                <circle cx="1.5" cy="1.56641" fill="#3B4144" r="1.5"/></svg></span></li>
                        <li><p><?php echo $newsObject->fakeDateTime() ?></p></li>
                    </ul>
                    <div class="box-btn d-flex justify-content-around">
                        <a class="btn btn-send-mail btn-grey" href="javascript:">
                            <p class="d-flex justify-content-around align-items-center"><i
                                        class="fa-solid fa-envelope"></i>
                                <span class="d-none d-lg-block">Gửi mail</span></p>
                        </a>
                        <a class="btn btn-facebook" href="javascript:">
                            <p class="d-flex justify-content-around align-items-center"><i class="fab fa-facebook"></i>
                                <span class="d-none d-lg-block">Chia sẻ</span></p>

                        </a>
                        <a class="btn-heart btn btn-outline-dark" href="javascript:">
                            <p class="d-flex justify-content-around align-items-center"><i
                                        class="fa-solid fa-heart"></i>
                                <span class="d-none d-lg-block">Lưu</span></p>
                        </a>
                    </div>
                </div>

            </div>
        </div>
        <div>
            <p style="margin-bottom: 36px">
                <a href="#"><img alt="main-news.png" src="<?php echo $newsObject->fakeImageUrl(960, 760, 'main-news.png') ?>"></a>
            </p>
            <p class="p-content1">
                <?php echo $newsObject->fakeContent(2000) ?>
            </p>
            <div class="box-img1 d-flex justify-content-between">
                <div class="main-item">
                    <a href="#"><img alt="news-detail-main.png" src="<?php echo $newsObject->fakeImageUrl(634, 690, 'news-detail-main.png') ?>"></a>
                </div>
                <div class="sub-item">
                    <div class="sub-item-child col-6 col-sm-12 pl-0">
                        <a href="#"> <img alt="news-detail1.png" class="w-100 h-100"
                                          src="<?php echo $newsObject->fakeImageUrl(307, 335, 'news-detail1.png') ?>"></a>
                    </div>
                    <div class="sub-item-child col-6 col-sm-12 pr-0">
                        <a href="#"><img alt="news-detail2.png" class="w-100 h-100"
                                         src="<?php echo $newsObject->fakeImageUrl(307, 335, 'news-detail2.png') ?>"></a>
                    </div>
                </div>
            </div>
            <p class="p-headding2"><?php echo $newsObject->fakeTitle(50) ?></p>
            <p class="p-content2"><?php echo $newsObject->fakeContent() ?></p>

            <div>
                <ul class="p-content2">
                    <li><strong>Tiêu chí 1:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Blandit
                        molestie etiam nunc egestas
                    </li>
                    <li><strong>Tiêu chí 2:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Blandit
                        molestie etiam nunc egestas
                    </li>
                    <li><strong>Tiêu chí 3:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Blandit
                        molestie etiam nunc egestas
                    </li>
                    <li><strong>Tiêu chí 4:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Blandit
                        molestie etiam nunc egestas
                    </li>
                    <li><strong>Tiêu chí 5:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Blandit
                        molestie etiam nunc egestas
                    </li>
                </ul>
            </div>
            <div class="tag">
                <a class="btn btn-key_word" href="">#Keyword 1</a>
                <a class="btn btn-key_word" href="">#Keyword 2</a>
            </div>
        </div>

        <div class="list-news">
            <div class=" list-news-title d-flex justify-content-between align-items-center">
                <div>
                    <p class="p-headding3 align-items-center d-inline">Tin cùng chuyên mục</p>
                    <span class="btn-darkgreen d-inline">xã hội</span>
                </div>
                <div class="box-view-all">
                    <p class="p-view-all d-none">Xem tất cả</p>
                    <p class="icon-angle-right"><i class="fa-solid fa-angle-right"></i></p>
                </div>
            </div>
            <nav class="list-news-content box d-flex flex-column">
                <?php
                for ($i = 1; $i < 3; $i++):
                    ?>
                    <div class="item-news-item flex-column">
                        <div class="box-content d-block d-md-none " style="margin-bottom: 8px">
                            <p class="p-title"><?php echo $newsObject->fakeTitle()?></p>
                            <ul>
                                <li><a href="#"><p>Xã hội</p></a></li>
                                <li><span class="dot"><svg fill="none" height="4" viewBox="0 0 3 4" width="3"
                                                           xmlns="http://www.w3.org/2000/svg">
                                <circle cx="1.5" cy="1.56641" fill="#3B4144" r="1.5"/></svg></span></li>
                                <li><p><?php echo $newsObject->fakeName() ?></p></li>
                                <li><span class="dot"><svg fill="none" height="4" viewBox="0 0 3 4" width="3"
                                                           xmlns="http://www.w3.org/2000/svg">
                                <circle cx="1.5" cy="1.56641" fill="#3B4144" r="1.5"/></svg></span></li>
                                <li><p><?php echo $newsObject->fakeDateTime() ?></p></li>
                            </ul>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="box-content">
                                <a class="w-100 h-100" href="">
                                    <img alt="main-news.png" class="img-main-news"
                                         src="<?php echo $newsObject->fakeImageUrl(468, 300, 'vnp-group') ?>">
                                </a>
                            </div>
                            <div class="box-content box-content2 col-12">
                                <div class="d-none d-md-block">
                                    <a href="#"><p class="p-title"><?php echo $newsObject->fakeTitle(); ?></p>
                                    </a>
                                    <ul>
                                        <li><a href="#"><p>Xã hội</p></a></li>
                                        <li><span class="dot"><svg fill="none" height="4" viewBox="0 0 3 4" width="3"
                                                                   xmlns="http://www.w3.org/2000/svg">
                                <circle cx="1.5" cy="1.56641" fill="#3B4144" r="1.5"/></svg></span></li>
                                        <li><p><?php echo $newsObject->fakeName() ?></p></li>
                                        <li><span class="dot"><svg fill="none" height="4" viewBox="0 0 3 4" width="3"
                                                                   xmlns="http://www.w3.org/2000/svg">
                                <circle cx="1.5" cy="1.56641" fill="#3B4144" r="1.5"/></svg></span></li>
                                        <li><p><?php echo $newsObject->fakeDateTime() ?></p></li>
                                    </ul>
                                </div>
                                <p class="p-content"><?php echo $newsObject->fakeDateTime()?></p>
                            </div>
                        </div>
                    </div>
                <?php
                endfor;
                ?>

            </nav>
            <div class=" list-news-title d-flex justify-content-between align-items-center">
                <p class="p-headding3 align-items-center d-inline">Tin thịnh hành</p>
            </div>
            <nav class="list-news-content box d-flex flex-column">
                <?php
                $i = 1;
                do {
                    ?>
                    <div class="item-news-item flex-column">
                        <div class="box-content d-block d-md-none " style="margin-bottom: 8px">
                            <p class="p-title"><?php echo $newsObject->fakeTitle(); ?></p>
                            <ul>
                                <li><a href="#"><p>Xã hội</p></a></li>
                                <li><span class="dot"><svg fill="none" height="4" viewBox="0 0 3 4" width="3"
                                                           xmlns="http://www.w3.org/2000/svg">
                                <circle cx="1.5" cy="1.56641" fill="#3B4144" r="1.5"/></svg></span></li>
                                <li><p><?php echo $newsObject->fakeName()?></p></li>
                                <li><span class="dot"><svg fill="none" height="4" viewBox="0 0 3 4" width="3"
                                                           xmlns="http://www.w3.org/2000/svg">
                                <circle cx="1.5" cy="1.56641" fill="#3B4144" r="1.5"/></svg></span></li>
                                <li><p><?php echo $newsObject->fakeDateTime() ?></p></li>
                            </ul>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="box-content">
                                <a class="w-100 h-100" href="">
                                    <img alt="main-news.png" class="img-main-news"
                                         src="<?php echo $newsObject->fakeImageUrl(468, 300, 'vnp') ?>">
                                </a>
                            </div>
                            <div class="box-content box-content2 col-12">
                                <div class="d-none d-md-block">
                                    <p class="p-title"><?php echo $newsObject->fakeTitle() ?></p>
                                    <ul>
                                        <li><a href="#"><p>Xã hội</p></a></li>
                                        <li><span class="dot"><svg fill="none" height="4" viewBox="0 0 3 4" width="3"
                                                                   xmlns="http://www.w3.org/2000/svg">
                                <circle cx="1.5" cy="1.56641" fill="#3B4144" r="1.5"/></svg></span></li>
                                        <li><p><?php echo $newsObject->fakeName()?></p></li>
                                        <li><span class="dot"><svg fill="none" height="4" viewBox="0 0 3 4" width="3"
                                                                   xmlns="http://www.w3.org/2000/svg">
                                <circle cx="1.5" cy="1.56641" fill="#3B4144" r="1.5"/></svg></span></li>
                                        <li><p><?php echo $newsObject->fakeDateTime() ?></p></li>
                                    </ul>
                                </div>
                                <p class="p-content"><?php echo $newsObject->fakeContent(); ?></p>
                            </div>
                        </div>
                    </div>
                    <?php
                    $i++;
                } while ($i <= 3)
                ?>
            </nav>
        </div>

    </div>
</div>
<footer id="footer">

</footer>
<script type="text/javascript">
    const show_menu_md = document.getElementById('show_menu_md');
    document.getElementById('menu_md').addEventListener("click", function () {
        // console.log(show_menu_md.style.display);
        if (show_menu_md.style.display === '' || show_menu_md.style.display === 'none') {
            show_menu_md.style.cssText = `
            display: block;
       `
            document.getElementById('menu_md').style.display = 'none';
            document.getElementById('btn_close_menu_md').style.display = 'block';
        }
    });
    document.getElementById('btn_close_menu_md').addEventListener("click", function () {
        if (show_menu_md.style.display === 'block') {
            show_menu_md.style.cssText = `
           display: none;
       `
            document.getElementById('menu_md').style.display = 'block';
            document.getElementById('btn_close_menu_md').style.display = 'none';
        }
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js"></script>
</body>
</html>