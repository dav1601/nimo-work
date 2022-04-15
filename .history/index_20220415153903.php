<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://res.cloudinary.com/vanh-tech/image/upload/v1649967750/201907151563178378869_1599513750510_avatar-2_hbsqzz.png" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="./Coloris-main/dist/coloris.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js" integrity="sha512-BNaRQnYJYiPSqHHDb58B0yaPfCu+Wgds8Gp/gU33kqBtgNS4tSPHuGibyoeqMV/TJlSKda6FXzoEyYGjTe+vXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./Coloris-main/dist/coloris.min.js"></script>


    <title>Chính sách Nimo</title>
</head>

<body>
    <script>
        $(function() {
            $("#color-1").val("#622DF7");
            $("#color-2").val("#847CDE");
            $("#color-3").val("#ffffff");
            $(document).on('change', "#color-1", function() {
                document.documentElement.style.setProperty('--bg-main', $(this).val());
            });
            $(document).on('change', "#color-2", function() {
                document.documentElement.style.setProperty('--bg-table', $(this).val());
            });
            $(document).on('change', "#color-3", function() {
                document.documentElement.style.setProperty('--text-color', $(this).val());
            });
            $("#clear").click(function(e) {
                e.preventDefault();
                $("#color-1").val("#622DF7").change();
                $("#color-2").val("#847CDE").change();
                $("#color-3").val("#ffffff").change();


            });
            Coloris({
                el: '.coloris',
                format: 'hex',
                theme: 'large',
                themeMode: 'dark',
                clearButton: {
                    show: true,
                    label: 'Clear'
                },
            });
            const main = document.documentElement.style.setProperty('--bg-main', '#622DF7');
            const table = document.documentElement.style.setProperty('--bg-table', '#847CDE');
            const text = document.documentElement.style.setProperty('--text-color', '#ffffff');
            $("#down").click(function() {
                html2canvas(document.getElementById("export")).then(function(canvas) {
                    var anchorTag = document.createElement("a");
                    document.body.appendChild(anchorTag);
                    anchorTag.download = "nimo-thuy-do.png";
                    anchorTag.href = canvas.toDataURL();
                    anchorTag.target = '_blank';
                    anchorTag.click();
                });
            });
        });
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Pacifico&display=swap');

        :root {
            --bg-main: #622DF7;
            --bg-table: #847CDE;
            --text-color: #ffffff;
        }

        body {
            color: var(--text-color);
            font-family: 'Open Sans', sans-serif;

        }



        h1 {
            font-family: 'Monument', cursive;
            font-weight: 900;
        }

        header {
            height: auto;
            /* overflow: hidden; */
            padding: 20px;
            background: var(--bg-main);
            height: 150px;
            box-shadow: 0 3px 5px rgba(0, 0, 0, 0.05);
            border-top-left-radius: 6px;
            border-top-right-radius: 6px;
            position: relative;
        }

        footer {
            height: auto;
            padding: 20px;
            background: var(--bg-main);
            box-shadow: 0 3px 5px rgba(0, 0, 0, 0.05);
            border-radius: 6px;
            position: relative;
        }

        .img-1 {
            top: 20px;
        }

        .img-2 {
            right: 25px;
            top: 15px;
        }

        .img-3 {
            left: 165px;
            top: 20px;
        }

        .img-4 {
            right: 174px;
            top: 20px;
        }

        .img-5 {
            left: 320px;
            top: 15px;
        }

        .img-6 {
            left: 480px;
            top: 14px;
        }

        .img-7 {
            right: 335px;
            top: -25px;
        }

        .nimo-9 {
            right: 10px;
            top: -15px;
        }

        .nimo-10 {
            right: 60px;
            top: 1px;
        }

        .table {
            color: var(--text-color);
            background: var(--bg-table);
            font-family: 'Open Sans', sans-serif;
            text-align: center;
            font-size: 16px;
            font-weight: 900;
        }

        li {
            font-size: 20px;
            text-transform: uppercase;
            margin-bottom: 5px;
        }

        header:before,
        header:after,
        footer:before,
        footer:after {
            content: "";
            height: 2px;
            position: absolute;
            left: 0;
            right: 0;
            clip-path: polygon(0% 0%, 5% 100%, 10% 0%, 15% 100%, 20% 0%, 25% 100%, 30% 0%, 35% 100%, 40% 0%, 45% 100%, 50% 0%, 55% 100%, 60% 0%, 65% 100%, 70% 0%, 75% 100%, 80% 0%, 85% 100%, 90% 0%, 95% 100%, 100% 0%);
            ;
        }

        header:before,
        footer:before {
            background-color: var(--text-color);
            top: 0;
        }

        /* header:after,
        footer::after {
            background-color: #622DF7;
            bottom: -1px;
        } */
        label {
            color: black;
        }

        input {
            border-radius: 4px;
            outline: none;
            border-color: none;
        }

        #table {
            padding: 15px;
            background: var(--bg-main);
            border-bottom-left-radius: 6px;
            border-bottom-right-radius: 6px;
        }
        .main-header {
            margin-top: margin-top: 2.5rem
rem
!important;;
        }

        @media only screen and (max-width: 1366px) {

            .img-2,
            .img-6,
            .img-5 {
                display: none;
            }

            .img-4 {
                right: 14px;
            }

            .img-3 {
                left: 192px;
                top: 20px;
            }

            .nimo-10 {
                right: -250px;
                top: 1px;
            }

            .img-7 {
                right: 147px;
                top: -25px;
            }
        }
    </style>
    <div id="wrapper">
        <div class="d-flex justify-content-center align-items-center my-2">
            <div class="form-group mx-4 mt-4 d-flex align-items-center justify-content-center ">
                <label for="1" class="mx-2 d-block mt-1">Đổi Màu Nền Chính:</label>
                <input type="text" class="coloris" id="color-1" value="" />
            </div>
            <div class="form-group mx-4 mt-4 d-flex align-items-center justify-content-center ">
                <label for="2" class="mx-2 d-block mt-1">Đổi Màu Nền Bảng:</label>
                <input type="text" id="color-2" class="coloris" value="" />
            </div>
            <div class="form-group mx-4 mt-4 d-flex align-items-center justify-content-center ">
                <label for="3" class="mx-2 d-block mt-1">Đổi Màu Chữ:</label>
                <input type="text" id="color-3" class="coloris" value="" />
            </div>
            <button type="button" class="btn btn-danger mx-2" id="clear">Clear</button>
            <button type="button" class="btn btn-primary" id="down">Tải về</button>
        </div>
        <div class="container-fluid py-4" id="export">
            <header>
                <div class="img-2 position-absolute">
                    <img src="img/img-5.png" alt="" width="112" height="112">
                </div>
                <div class="img-1 position-absolute">
                    <img src="img/img-1.webp" alt="">
                </div>
                <div class="img-5 position-absolute">
                    <img src="img/img-3.webp" alt="">
                </div>
                <div class="img-6 position-absolute">
                    <img src="img/img-7.png" alt="">
                </div>
                <div class="img-3 position-absolute">
                    <img src="img/img-2.webp" alt="" width="112" height="112">
                </div>
                <div class="img-4 position-absolute">
                    <img src="img/img-4.png" alt="" width="112" height="112">
                </div>
                <div class="img-7 position-absolute">
                    <img src="img/img-6.png" alt="">
                </div>
                <div class="d-flex justify-content-center align-items-center">
                    <h1 class="text-center text-uppercase   d-inline-block main-header" style="margin-right: 6rem!important;">
                        Chính sách Nimo</h1>
                </div>
            </header>
            <div id="table">
                <table class="table table-bordered mb-0">
                    <thead>
                        <tr>
                            <th scope="col">Nhóm</th>
                            <th scope="col">Ngày live tối thiểu</th>
                            <th scope="col">Giờ live tối thiểu</th>
                            <th scope="col">Đá quý tối thiểu</th>
                            <th scope="col">Lương <strong>(USD)</strong></th>
                            <th scope="col" class=""><span class="d-block mb-1" style="border-bottom: 2px solid var(--text-color); padding-bottom: 2px ;">Đá
                                    rút<strong>(USD)</strong></span><span>Tổng đá/285</span>
                            </th>
                            <th scope="col">Thưởng <strong>(USD)</strong></th>
                            <th scope="col">Tổng <strong>(USD)</strong></th>
                            <th scope="col">Tổng <strong>(VNĐ)</strong></th>
                            <th scope="col" class=""><span class="d-block mb-1" style="border-bottom: 2px solid var(--text-color); padding-bottom: 2px ;">Bonus độc
                                    quyền <strong>(USD)</strong></span><span>(IDOL)</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Primary</td>
                            <td>15</td>
                            <td>30</td>
                            <td>5.000</td>
                            <td>14</td>
                            <td>18</td>
                            <td>9</td>
                            <td>41</td>
                            <td>943.248</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>F</td>
                            <td>15</td>
                            <td>30</td>
                            <td>10.000</td>
                            <td>28</td>
                            <td>35</td>
                            <td>16</td>
                            <td>79</td>
                            <td>1.817.921</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>E</td>
                            <td>15</td>
                            <td>30</td>
                            <td>30.000</td>
                            <td>67</td>
                            <td>105</td>
                            <td>47</td>
                            <td>219</td>
                            <td>5.035.525</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>D</td>
                            <td>15</td>
                            <td>30</td>
                            <td>50.000</td>
                            <td>128</td>
                            <td>175</td>
                            <td>81</td>
                            <td>384</td>
                            <td>8.842.626</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>C</td>
                            <td>15</td>
                            <td>30</td>
                            <td>100.000</td>
                            <td>256</td>
                            <td>351</td>
                            <td>141</td>
                            <td>748</td>
                            <td>17.203.921</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>B</td>
                            <td>15</td>
                            <td>30</td>
                            <td>150.000</td>
                            <td>438</td>
                            <td>526</td>
                            <td>239</td>
                            <td>1.203</td>
                            <td>27.665.500</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>A</td>
                            <td>15</td>
                            <td>30</td>
                            <td>300.000</td>
                            <td>856</td>
                            <td>1.053</td>
                            <td>508</td>
                            <td>2.417</td>
                            <td>55.603.031</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>S</td>
                            <td>15</td>
                            <td>30</td>
                            <td>500.000</td>
                            <td>1.347</td>
                            <td>1.754</td>
                            <td>815</td>
                            <td>3.916</td>
                            <td>90.077.180</td>
                            <td>20</td>
                        </tr>
                        <tr>
                            <td class="sp">Super Idol 1</td>
                            <td>15</td>
                            <td>30</td>
                            <td>1.000.000</td>
                            <td>2.352</td>
                            <td>3.509</td>
                            <td>1.549</td>
                            <td>7.410</td>
                            <td>170.435.034</td>
                            <td>50</td>
                        </tr>
                        <tr>
                            <td class="sp">Super Idol 2</td>
                            <td>15</td>
                            <td>30</td>
                            <td>1.500.000</td>
                            <td>3.022</td>
                            <td>5.263</td>
                            <td>1.929</td>
                            <td>10.214</td>
                            <td>234.918.090</td>
                            <td>60</td>
                        </tr>
                        <tr>
                            <td class="sp">Super Idol 3</td>
                            <td>15</td>
                            <td>30</td>
                            <td>2.000.000</td>
                            <td>3.604</td>
                            <td>7.018</td>
                            <td>2.316</td>
                            <td>12.938</td>
                            <td>297.518.130</td>
                            <td>75</td>
                        </tr>
                        <tr>
                            <td class="sp">Super Idol 4</td>
                            <td>15</td>
                            <td>30</td>
                            <td>3.000.000</td>
                            <td>4.861</td>
                            <td>10.526</td>
                            <td>3.300</td>
                            <td>18.687</td>
                            <td>429.806.620</td>
                            <td>75</td>
                        </tr>
                        <tr>
                            <td class="sp">Super Idol 5</td>
                            <td>15</td>
                            <td>30</td>
                            <td>4.000.000</td>
                            <td>6.237</td>
                            <td>14.035</td>
                            <td>4.300</td>
                            <td>24.572</td>
                            <td>565.151.423</td>
                            <td>80</td>
                        </tr>
                        <tr>
                            <td class="sp">Super Idol 6</td>
                            <td>15</td>
                            <td>30</td>
                            <td>5.000.000</td>
                            <td>7.642</td>
                            <td>17.544</td>
                            <td>5.123</td>
                            <td>30.291</td>
                            <td>696.693.690</td>
                            <td>85</td>
                        </tr>
                        <tr>
                            <td class="sp">Super Idol 7</td>
                            <td>15</td>
                            <td>30</td>
                            <td>7.500.000</td>
                            <td>10.332</td>
                            <td>26.316</td>
                            <td>7.250</td>
                            <td>43.898</td>
                            <td>1.009.644.570</td>
                            <td>100</td>
                        </tr>
                        <tr>
                            <td class="sp">Super Idol 8</td>
                            <td>15</td>
                            <td>30</td>
                            <td>10.000.000</td>
                            <td>13.072</td>
                            <td>35.088</td>
                            <td>9.050</td>
                            <td>57.210</td>
                            <td>1.315.812.760</td>
                            <td>100</td>
                        </tr>


                    </tbody>
                </table>
            </div>
            <footer class="mt-2">
                <div class="nimo-9 position-absolute">
                    <img src="img/img-8.webp" alt="">
                </div>
                <div class="nimo-10 position-absolute">
                    <img src="img/img-9.png" alt="">
                </div>
                <h1>Lưu Ý:</h1>
                <ul>
                    <li>Tỷ giá đô thay đổi theo từng thời điểm của thị trường</li>
                    <li>Nhóm A là chỉ tiêu tối thiểu đối với các idol độc quyền</li>
                    <li>Bonus độc quyền chỉ áp dụng cho idol đọc quyền</li>
                </ul>
            </footer>
        </div>
    </div>

</body>


</html>