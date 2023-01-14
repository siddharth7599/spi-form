<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <style>
        .container-fluid {
            background-color: #f1f1f1;
        }

        img {
            height: 200px;
            width: 200px;
        }

        h3 {
            color: orange;
        }

        button {
            margin-top: 3px;
            background-color: orangered;
            border-radius: 8px;
        }

        .navbar .container-fluid {
            background-color: blue;
            height: 50px;
            color: white;

        }

        a {
            text-decoration: none;
            block-size: auto;
            color: white;
        }

        .content .container-fluid {
            background-image: url("images/flower.jpg");

        }

        .topnav {
            overflow: hidden;
            background-color: blue;
        }

        .topnav a {
            display: inline-flex;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            size: 17px;
            float: left;
            color: white;
        }

        .topnav a:hover {
            background-color: orangered;

        }
    </style>

</head>

<body>
    <!-- header start -->
    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4 mt-4">
                    <img src="images/spi2.jpg" alt="pic here" />

                </div>
                <div class="col-sm-4">
                    <h1>Softpro Learning Center</h1>
                    <h3>A unit of SOftpro group of companies</h3>

                </div>
                <div class="col-sm-4">
                    <button>
                        Admin Login
                    </button>
                </div>
            </div>
            <!-- header end -->
            <!-- navbar start -->
            <!-- <div class="topnav">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-2">
                            <a href="#">Home</a>
                        </div>
                        <div class="col-sm-2">
                            <a href="#">About Spi</a>
                        </div>
                        <div class="col-sm-2">
                            <a href="#">ST2023</a>
                        </div>
                        <div class="col-sm-2">
                            <a href="#">Technologies</a>
                        </div>
                        <div class="col-sm-2" style="margin-left:25px;">
                            <a href="#">Contact-us</a>
                        </div>
                        <div class="col-sm-2">
                            <a href="#"></a>
                        </div>
                    </div>
                </div>
            </div> -->






            <!-- navbar end -->
        </div>

        <div class="topnav">
            <a href="#">Home</a>
            <a href="#">About Us</a>
            <a href="#">Contact Us</a>
            <a href="#">Technology</a>
            <a href="#">Home</a>
        </div>



        <div class="content">
            <!-- <div class="row">
                <div class="col-sm-12">
                    <img src="images/spi1.jpg"/>
                </div>
            </div> -->
            <div class="container-fluid">
                <!-- <img src="images/spi.jpg" style="height:300px;width:500px;"/> -->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 mt-4">
                            <iframe width="100%" height="300%" src="https://www.youtube.com/embed/g98Lxeg_SLA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

                        </div>
                        <div class="col-sm-6 mt-5 ps-5">
                            <h1>Softpro Summer Training Pre-Reporting Portal </h1>
                            <h2>Softpro Welcomea all the trainies to the biggest summer training festival 2023</h2>
                            <p>For any help and assistance,call us on:</p>
                            <p>6387414457,6387414457</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-primary text-center " style="height:150px">
            <h2 class="mt-3 pt-4 text-white">Please Fill the Pre-Reporting Form</h2>
        </div>
        <!-- form start -->
        <div class="container">
            <h2>Pre-Reporting Form</h2>
            <p>(Only those student who have register for summer training in softpro india are eligible to fill this form.(केवल वे छात्र जिन्होंने सॉफ्टप्रो इंडिया में ग्रीष्मकालीन प्रशिक्षण के लिए पंजीकरण कराया है, वे ही इस फॉर्म को भरने के पात्र हैं।)</p>
            <form action="code.php" method="post" enctype="multipart/form-data" class="form-control">
                <div class="row">
                    <div class="col-sm-6">
                        <input type="text" style="width:100%" name="mobile" class="form-control" id="mobile" maxlength="10" minlength="10" placeholder="Enter Register Mobile " />
                    </div>
                    <div class="col-sm-6">
                        <input type="email" style="width:100%" name="email" class="form-control" id="email" placeholder="Enter Register Email" />
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-6">
                        <input type="text" style="width:100%" name="name" class="form-control" id="name" placeholder="Enter Register Name" />
                    </div>
                    <div class="col-sm-6">
                        <input type="text" style="width:100%" name="college" class="form-control" id="college" placeholder="Enter Register college" />
                    </div>
                </div>


                <div class="row mt-3">
                    <div class="col-sm-6">
                        <input type="text" style="width:100%" name="guardian_name" id="guardian_name" placeholder="Enter Register Guardian " class="form-control" />
                    </div>
                    <div class="col-sm-6">
                        <input type="number" style="width:100%" name="guardian_mobile" id="guardian_mobile" placeholder="Enter Register guardian_mobile" class="form-control" />
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-6">
                        <select name="course" class="form-control" id="course">
                            <option value="">Select Course</option>
                            <option value="diploma">Diploma </option>
                            <option value="btech">Btech </option>
                            <option value="pgdca">PGDCA </option>
                            <option value="mtech">Mtech </option>
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <select name="branch" class="form-control" id="branch">
                            <option value="">Select Branch</option>
                            <option value="cse">Computer Science and Engineering </option>
                            <option value="ee">Electrical Engineering </option>
                            <option value="eee">Electronics Engineering </option>

                        </select>
                    </div>
                    <!-- <div class="col-sm-6">
                        <input type="text" style="width:500px" name="college" id="college" placeholder="Enter Register college" class="form-control" />
                    </div> -->
                </div>

                <div class="row mt-3">
                    <div class="col-sm-6">
                        <select name="year" class="form-control" id="year">
                            <option value="">Select Year</option>
                            <option value="first year">First Year </option>
                            <option value="second year">Second Year </option>
                            <option value="thired year">Thired year </option>
                            <option value="fourth Year">Fourth Year </option>
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <select name="gender" class="form-control" id="gender">
                            <option value="">Select Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female </option>
                            <option value="other">Other</option>

                        </select>
                    </div>

                </div>

                <div class="row mt-3">
                    <div class="col-sm-6">
                        <select name="technologies" class="form-control" id="technologies">
                            <option value="">Select Technology</option>
                            <option value="python">Python with Django </option>
                            <option value="php">PHP with Laravel </option>
                            <option value=".net">.net </option>
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <select name="rdate" class="form-control" id="rdate">
                            <option value="">Select Reporting Date</option>
                            <option value="9 july 2023 ">9 july 2023</option>
                            <option value="12 july 2023">12 july 2023 </option>
                            <option value="15 july 2023">15 july 2023</option>

                        </select>
                    </div>

                </div>



                <div class="row mt-3">
                    <div class="col-sm-6">
                        <select name="accomodation" class="form-control" id="accomodation">
                            <option value="">Select type of Accomodation</option>
                            <option value="hostel">Hostel </option>
                            <option value="room">Room </option>
                            <option value="selfarrag">Self Arrangement </option>
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <select name="mess" class="form-control" id="mess">
                            <option value="">Would you like to mess?</option>
                            <option value="yes ">Yes</option>
                            <option value="no">NO </option>
                        </select>
                    </div>

                </div>
                <div class="row mt-3">
                    <div class="col-sm-6">
                        <label for="photo">Upload your passport size photo in jpg/jpeg/png</label>
                        <input type="file" name="photo" id="photo" accept="image/jpg image/png image/jpeg" placeholder="upload your passport size photo"/>

                    </div>
                    <div class="col-sm-6">
                    <label for="aadhar">Upload your Aadhar Card in jpg/jpeg/png/pdf</label>
                        <input type="file" name="aadhar" id="aadhar" accept="image/jpg image/png image/jpeg image/pdf" placeholder="upload your aadhar card "/>

                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-6">
                        <label for="marksheet">Upload your marksheet in pdf</label><br>
                        <input type="file" name="marksheet" id="marksheet" accept="image/jpg image/png image/jpeg image/pdf" placeholder="upload your marksheet"/>

                    </div>
                    <div class="col-sm-6">
                    <select name="district" class="form-control" id="district">
                            <option value="">Select District</option>
                            <option value="mau ">Mau</option>
                            <option value="kanpur">Kanpur</option>
                        </select>
                    

                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-6">
                        <input type="text" name="pincode" id="pincode" class="form-control" placeholder="Enter pincode" required="true"/>
                    </div>
                    <div class="col-sm-6">
                        <textarea name="address" id="address" class="form-control" required="true" required>Address</textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <input type="checkbox">
                        <label for="checkbox">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero placeat, sit odio deserunt beatae, saepe sequi tenetur dicta vitae accusantium ipsum dignissimos sapiente, a unde. Vitae corporis molestiae maxime consectetur!</label>

                    </div>
                </div>
                <!-- <div class="row">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4"></div>
                </div> -->
                <div class="row mt-3">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4">
                        <input type="submit" value="Submit" class="form-control bg-info" name="submit"/>
                        <div class="col-sm-4 "></div>

                    </div>
                </div>



            </form>
        </div>
        <!-- form end -->

    </div>
</body>
</html>