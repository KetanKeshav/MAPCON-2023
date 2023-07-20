<!DOCTYPE html>
<html>
<?php $page = 'oc'; ?>

<head>
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Organizing Committeee | MAPCON 2023</title>

  <?php include 'include/head.php' ?>

  <style>
    .card {
      margin-top: 20px;
      border: none;
      background-color: transparent;
    }

    .card-title {
      font-size: 20px;
      font-weight: bold;
    }

    .card-text {
      text-align: left;
      color: #473F3F;
      font-family: 'Red Hat Text', Sans-serif;
      font-size: 18px;
    }

    .card-img-top {
      width: 300px;
      height: 325px;
    }

    .span_head {
      font-weight: bold;
      color: #EF4D48;
    }
  </style>

</head>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <?php include 'include/navbar.php'; ?>
      </div>
    </header>
  </div>
  <!-- end header section -->

  <section class="course_section layout_padding content-bg">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Organizing <span>Committee</span>
        </h2>
      </div>
      <hr style="border-bottom: 3px solid #2575fc; width: 50%;">
      <!-- <div style="font-size: 18px;" class="col-md-12"> -->
        <!-- <h2 style="color: #EF4D48; font-weight: bold; font-size:2rem;">Chief Patrons:</h2>
        <ul>
          <li>A. S. Kiran Kumar, Member, Space Commission</li>
          <li>S. Somanath, Secretary, DOS & Chairman, ISRO</li>
          <li>Pawan Kumar Goenka, Chairman, In-SPACe</li>
          <li>Sameer V. Kamath, Chairman, DRDO</li>
        </ul> -->
        <!-- <h2 style="color: #EF4D48; font-weight: bold; font-size:2rem;">Patrons:</h2>
        <ul>
          <li>Nilesh M. Desai, Director, SAC/ISRO, Ahmedabad</li>
          <li>G. Viswam, Director, LRDE/DRDO, Bangalore</li>
        </ul> -->
        <!-- <h2 style="color: #EF4D48; font-weight: bold; font-size:2rem;">General Co-Chairs:</h2>
        <ul>
          <li>Rajeev Jyoti, IN-SPACe, Ahmedabad</li>
          <li>M. Jaleel Akhtar, IIT, Kanpur</li>
        </ul> -->
        <!-- <h2 style="color: #EF4D48; font-weight: bold; font-size:2rem;">TPC Co-Chairs:</h2>
        <ul>
          <li>Milind B. Mahajan, SAC/ISRO, Ahmedabad</li>
          <li>Nagendra Prasad Pathak, IIT Roorkee</li>
        </ul> -->
        <!-- <h2 style="color: #EF4D48; font-weight: bold; font-size:2rem;">Finance Chair:</h2>
        <ul>
          <li>Prateek Bansal, ISRO, Ahmedabad</li>
          <li>Jaswant Sharma, ISRO, Ahmedabad</li>
        </ul> -->
        <!-- <h2 style="color: #EF4D48; font-weight: bold; font-size:2rem;">Tutorials and Faculty Development Program:</h2>
        <ul>
          <li>S. B. Chakrabarty, IIT, Gandhinagar</li>
          <li>Manoj Kumar Meshram, IIT-BHU, Varanasi</li>
          <li>Trushit Upadhyaya , Charusat, Changa</li>
          <li>Vivek Pandit, PDEU, Gandhinagar</li>
        </ul> -->
        <!-- <h2 style="color: #EF4D48; font-weight: bold; font-size:2rem;">Special Sessions:</h2>
        <ul>
          <li>Sanjeev Kulshrestha, SAC/ISRO, Ahmedabad</li>
          <li>Kumar Vaibhav Srivastava, IIT, Kanpur</li>
          <li>Amit Kumar Singh, IIT Patna</li>
          <li>Himangshu B Baskey, DRDO-DMSRDE, Kanpur</li>
          <li>Ramesh Gupta, Ligado Networks, USA</li>
          <li>Qammer H. Abbasi, University of Glasgow</li>
          <li>Kranti Kumar Katare, Ericsson Antenna Technology, Germany</li>
          <li>Pratik Mevada, SAC/ISRO, Ahmedabad</li>
        </ul> -->
        <!-- <h2 style="color: #EF4D48; font-weight: bold; font-size:2rem;">Workshop:</h2>
        <ul>
          <li>Dhaval A. Pujara, PDEU, Gandhinagar</li>
          <li>K.P. Ray, DIAT, Pune</li>
          <li>Yogesh Verma, RCI/DRDO, Hyderabad</li>
          <li>M. M. Sharma , MNIT, Jaipur</li>
          <li>Raghvendra Kumar Chaudhary, IIT Kanpur</li>
          <li>Prabhakar Pathak, USA</li>
        </ul> -->
        <!-- <h2 style="color: #EF4D48; font-weight: bold; font-size:2rem;">Industry Engagement:</h2>
        <ul>
          <li>Rod Waterhouse, Octane Wireless, USA</li>
          <li>Debabani Choudhury, Intel Labs, USA</li>
          <li>Jolly Dhar, SAC/ISRO, Ahmedabad</li>
          <li>Sandeep Chaturvedi, GAETEC, Hyderabad</li>
          <li>Mayank Gajjar, Pacemaker Solutions, Ahmedabad</li>
          <li>G. R. Shinde, AMPL, Hyderabad</li>
          <li>Tapas Chakravarty, TCS Research, Kolkata</li>
        </ul> -->
        <!-- <h2 style="color: #EF4D48; font-weight: bold; font-size:2rem;">SIGHT:</h2>
        <ul>
          <li>Puneet Kumar Mishra, URSC/ISRO, Bangalore</li>
          <li>Chinmoy Saha, IIST, Trivandrum</li>
          <li>Sravan Kumar Sagi, SAC/ISRO, Ahmedabad</li>
          <li>Ajay Poddar, Synergy Microwave Corp. , USA</li>
        </ul> -->
        <!-- <h2 style="color: #EF4D48; font-weight: bold; font-size:2rem;">Exhibition and Sponsors:</h2>
        <ul>
          <li>Nikhil Arora, IN-SPACe, Ahmedabad</li>
          <li>Ashutosh Kedar, LRDE/DRDO, Bangalore</li>
          <li>Santanu Sinha, SAC/ISRO, Ahmedabad</li>
          <li>Devendra Kumar Sharma, SAC/ISRO, Ahmedabad</li>
          <li>C. J. Reddy, Altair, USA</li>
          <li>Sukomal Dey, IIT Palakkad</li>
          <li>Sandhya Chandravanshi, CML Microcircuits Ltd., UK</li>
          <li>Prashant Vashishtha, DRDL, Jodhpur</li>
        </ul> -->
        <!-- <h2 style="color: #EF4D48; font-weight: bold; font-size:2rem;">Startup Initiative and Government Outreach:</h2>
        <ul>
          <li>Tushar Sharma, Renesas Elecronics, USA</li>
          <li>Vinod Kumar, IN-SPACe, Ahmedabad</li>
          <li>Yogesh Karandikar, Tantrayut , Mumbai</li>
          <li>Brijesh Soni, IN-SPACe, Bangalore</li>
          <li>Sanjay Nekkanti, Dhruva Space, Hyderabad</li>
          <li>V. Vishwanathan Vedam, Azista, Ahmedabad</li>
          <li>Vishal Kumar Chakradhary, RF Nanocomposites, SIIIC, IIT Kanpur</li>
        </ul> -->
        <!-- <h2 style="color: #EF4D48; font-weight: bold; font-size:2rem;">Women In Engineering:</h2>
        <ul>
          <li>Shilpi Soni, SAC/ISRO, Ahmedbad</li>
          <li>Mridula Gupta, University of Delhi South Campus</li>
          <li>Shobha Sundar Ram, IIIT, Delhi</li>
          <li>Harshita Tolani, SAC/ISRO, Ahmedabad</li>
          <li>Kriti Khatri, IN-SPACe, Ahmedabad</li>
          <li>Beenamole K.S., LRDE/DRDO, Bangalore</li>
          <li>Anwesha Khasnobish, TCS Research, Kolkata</li>
        </ul> -->
        <!-- <h2 style="color: #EF4D48; font-weight: bold; font-size:2rem;">Young Professionals:</h2>
        <ul>
          <li>Somak Bhattacharyya, IIT-BHU, Varanasi</li>
          <li>Shruti Sinha, SAC/ISRO, Ahmedabad</li>
          <li>Malika Somanath, IISc, Bangalore</li>
          <li>Anamiya Bhattacharya, SAC/ISRO, Ahmedabad</li>
          <li>Zubair Akhter, KAUST</li>
        </ul> -->
        <!-- <h2 style="color: #EF4D48; font-weight: bold; font-size:2rem;">Ph.D. Initiative:</h2>
        <ul>
          <li>C.V.N. Rao, SAC/ISRO, Ahmedabad</li>
          <li>A.R. Harish, IIT, Kanpur</li>
          <li>Karun Rawat, IIT, Roorkee</li>
          <li>Ashwini Sawant, IIT, Guwahati</li>
          <li>Ganga Prasad Pandey, PDEU, Gandhinagar</li>
          <li>Tushar Goel, NIT, Uttarakhand</li>
          <li>Surya Prakash Singh, IIIT, Bhubaneswar</li>
          <li>Anirban Sarkar, IIT, Mandi</li>
        </ul> -->
        <!-- <h2 style="color: #EF4D48; font-weight: bold; font-size:2rem;">Student Paper Contest:</h2>
        <ul>
          <li>Amalendu Patnaik, IIT, Roorkee</li>
          <li>S.C. Bera, SAC/ISRO, Ahmedabad</li>
          <li>Vijay Kumar Singh, SAC, Ahmedabad</li>
          <li>Senthil Kumar, URSC, Bangalore</li>
          <li>Deepak Ghodgaonkar , DAIICT, Gandhinagar</li>
        </ul> -->
        <!-- <h2 style="color: #EF4D48; font-weight: bold; font-size:2rem;">Mentor-Mentee Initiative:</h2>
        <ul>
          <li>Y. P. Kosta, Charusat University,Changa</li>
          <li>Ratnajit Bhattacharjee, IIT, Guwahati</li>
          <li>Chandrakanta Kumar, URSC/ISRO, Bangalore</li>
          <li>Pratik Mevada, SAC/ISRO, Ahmedabad</li>
        </ul> -->
        <!-- <h2 style="color: #EF4D48; font-weight: bold; font-size:2rem;">Website & IT:</h2>
        <ul>
          <li>Nikhil S. Arora, IN-SPACe, Ahmedabad</li>
          <li>Rakesh Kumar , SAC/ISRO, Ahmedabad</li>
          <li>B Gowrish, IIT, Roorkee</li>
        </ul> -->
        <!-- <h2 style="color: #EF4D48; font-weight: bold; font-size:2rem;">Publicity & Media :</h2>
        <ul>
          <li>Hina Yadav, Delhi University</li>
          <li>Jagdish M. Rathod, BVM, Vallabh Vidyanagar</li>
          <li>Manpuram Mahto, NIT, Patna</li>
        </ul> -->
        <!-- <h2 style="color: #EF4D48; font-weight: bold; font-size:2rem;">Publications :</h2>
        <ul>
          <li>Vijay Shanker Tripathi, MNNIT Allahabad, Prayagraj</li>
          <li>Mrinal Kanti Mandal, IIT, Kharagpur</li>
          <li>Jawad Y Siddiqui, University of Calcutta, Kolkata</li>
          <li>Debdeep Sarkar, IISc, Bangalore</li>
        </ul> -->
      <!-- </div> -->
      <div class="heading_container span_body">
        <h2><span>Chief Patrons:</span></h2>
      </div>
        <div class="row">
          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/cp-1.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">A. S. Kiran Kumar</h4>
              <p class="card-text">Member, Space Commission</p>
            </div>
          </div>
          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/cp-2.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">S. Somanath</h4>
              <p class="card-text">Secretary, DOS & Chairman, ISRO</p>
            </div>
          </div>
          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/cp-3.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Pawan Kumar Goenka</h4>
              <p class="card-text">Chairman, In-SPACe</p>
            </div>
          </div>
          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/cp-4.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Sameer V. Kamath</h4>
              <p class="card-text">Chairman, DRDO</p>
            </div>
          </div>
        </div>

        <h2><span class="span_head">Patrons:</span></h2>
        <div class="row">
          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/p-1.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Nilesh M. Desai</h4>
              <p class="card-text">Director, SAC/ISRO, Ahmedabad</p>
            </div>
          </div>
          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/p-2.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">G. Viswam</h4>
              <p class="card-text">Director, LRDE/DRDO, Bangalore</p>
            </div>
          </div>
        </div>

        <h2><span class="span_head">General Co-Chairs:</span></h2>

        <div class="row">
          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/gc-1.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Rajeev Jyoti</h4>
              <p class="card-text">IN-SPACe, Ahmedabad</p>
            </div>
          </div>
          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/gc-2.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">M. Jaleel Akhtar</h4>
              <p class="card-text">IIT, Kanpur</p>
            </div>
          </div>
        </div>

        <h2><span class="span_head">TPC Co-Chairs:</span></h2>

        <div class="row">
          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/tpc-1.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Milind B. Mahajan</h4>
              <p class="card-text">SAC/ISRO, Ahmedabad</p>
            </div>
          </div>
          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/tpc-2.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Nagendra Prasad Pathak</h4>
              <p class="card-text">IIT Roorkee</p>
            </div>
          </div>
        </div>
        <h2><span class="span_head">Finance Chair:</span></h2>
        <div class="row">
          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/fc-1.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Prateek Bansal</h4>
              <p class="card-text">ISRO, Ahmedabad</p>
            </div>
          </div>
          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/fc-2.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Jaswant Sharma</h4>
              <p class="card-text">ISRO, Ahmedabad</p>
            </div>
          </div>
        </div>

        <h2><span class="span_head">Tutorials and Faculty Development Program:</span></h2>
        
        <div class="row">
        
        <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/tfd-1.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">S. B. Chakrabarty</h4>
              <p class="card-text">IIT, Gandhinagar</p>
            </div>
          </div>
          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/tfd-2.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Manoj Kumar Meshram</h4>
              <p class="card-text">IIT-BHU, Varanasi</p>
            </div>
          </div>
          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/tfd-3.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Trushit Upadhyaya</h4>
              <p class="card-text">Charusat, Changa</p>
            </div>
          </div>
          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/temp.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Vivek Pandit</h4>
              <p class="card-text">PDEU, Gandhinagar</p>
            </div>
          </div>

        </div>
        
        <h2><span class="span_head">Special Sessions:</span></h2>
        
        <div class="row">

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/ss-1.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Sanjeev Kulshrestha</h4>
              <p class="card-text">SAC/ISRO, Ahmedabad</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/ss-2.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Kumar Vaibhav Srivastava</h4>
              <p class="card-text">IIT, Kanpur</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/ss-3.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Amit Kumar Singh</h4>
              <p class="card-text">IIT Patna</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/ss-4.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Himangshu B Baskey</h4>
              <p class="card-text">DRDO-DMSRDE, Kanpur</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/temp.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Ramesh Gupta</h4>
              <p class="card-text">Ligado Networks, USA</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/ss-6.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Qammer H. Abbasi</h4>
              <p class="card-text">University of Glasgow</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/ss-7.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Kranti Kumar Katare</h4>
              <p class="card-text">Ericsson Antenna Technology, Germany</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/ss-8.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Pratik Mevada</h4>
              <p class="card-text">SAC/ISRO, Ahmedabad</p>
            </div>
          </div>

        </div>

        <h2><span class="span_head">Workshop:</span></h2>

        <div class="row">

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/w-1.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Dhaval A. Pujara</h4>
              <p class="card-text">PDEU, Gandhinagar</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/w-2.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">K.P. Ray</h4>
              <p class="card-text">DIAT, Pune</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/temp.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Yogesh Verma.</h4>
              <p class="card-text">RCI/DRDO, Hyderabad</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/w-4.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">M. M. Sharma</h4>
              <p class="card-text">MNIT, Jaipur</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/w-5.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Raghvendra Kumar Chaudhary</h4>
              <p class="card-text">IIT Kanpur</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/w-6.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Prabhakar Pathak</h4>
              <p class="card-text">USA</p>
            </div>
          </div>

        </div>

        <h2><span class="span_head">Industry Engagement:</span></h2>

        <div class="row">

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/ie-1.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Rod Waterhouse</h4>
              <p class="card-text">Octane Wireless, USA</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/ie-2.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Debabani Choudhury</h4>
              <p class="card-text">Intel Labs, USA</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/ie-3.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Jolly Dhar</h4>
              <p class="card-text">SAC/ISRO, Ahmedabad</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/ie-4.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Sandeep Chaturvedi</h4>
              <p class="card-text">GAETEC, Hyderabad</p>
            </div>
          </div>
          
          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/temp.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Mayank Gajjar</h4>
              <p class="card-text">Pacemaker Solutions, Ahmedabad</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/temp.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">G. R. Shinde</h4>
              <p class="card-text">AMPL, Hyderabad</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/ie-7.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Tapas Chakravarty</h4>
              <p class="card-text">TCS Research, Kolkata</p>
            </div>
          </div>

        </div>

        <h2><span class="span_head">SIGHT:</span></h2>

        <div class="row">

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/s-1.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Puneet Kumar Mishra</h4>
              <p class="card-text">URSC/ISRO, Bangalore</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/s-2.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Chinmoy Saha</h4>
              <p class="card-text">IIST, Trivandrum</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/s-3.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Sravan Kumar Sagi</h4>
              <p class="card-text">SAC/ISRO, Ahmedabad</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/s-4.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Ajay Poddar</h4>
              <p class="card-text">Synergy Microwave Corp. , USA</p>
            </div>
          </div>

        </div>

        <h2><span class="span_head">Exhibition and Sponsors:</span></h2>

        <div class="row">

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/temp.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Nikhil Arora</h4>
              <p class="card-text">IN-SPACe, Ahmedabad</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/es-2.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Ashutosh Kedar</h4>
              <p class="card-text">LRDE/DRDO, Bangalore</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/es-3.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Santanu Sinha.</h4>
              <p class="card-text">SAC/ISRO, Ahmedabad</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/es-4.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Devendra Kumar Sharma</h4>
              <p class="card-text">SAC/ISRO, Ahmedabad</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/es-5.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">C. J. Reddy</h4>
              <p class="card-text">Altair, USA</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/es-6.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Sukomal Dey</h4>
              <p class="card-text">IIT Palakkad</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/es-7.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Sandhya Chandravanshi</h4>
              <p class="card-text">CML Microcircuits Ltd., UK</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/temp.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Prashant Vashishtha</h4>
              <p class="card-text">DRDL, Jodhpur</p>
            </div>
          </div>

        </div>

        <h2><span class="span_head">Startup Initiative and Government Outreach:</span></h2>

        <div class="row">

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/sigo-1.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Tushar Sharma</h4>
              <p class="card-text">Renesas Elecronics, USA</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/temp.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Vinod Kumar</h4>
              <p class="card-text">IN-SPACe, Ahmedabad</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/sigo-3.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Yogesh Karandikar</h4>
              <p class="card-text">Tantrayut , Mumbai</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/temp.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Brijesh Soni</h4>
              <p class="card-text">IN-SPACe, Bangalore</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/sigo-5.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Sanjay Nekkanti</h4>
              <p class="card-text">Dhruva Space, Hyderabad</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/sigo-6.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">V. Vishwanathan Vedam</h4>
              <p class="card-text">Azista, Ahmedabad</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/sigo-7.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Vishal Kumar Chakradhary</h4>
              <p class="card-text">RF Nanocomposites, SIIIC, IIT Kanpur</p>
            </div>
          </div>

        </div>

        <h2><span class="span_head">WiE:</span></h2>

        <div class="row">

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/wie-1.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Shilpi Soni</h4>
              <p class="card-text">SAC/ISRO, Ahmedbad</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/wie-2.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Mridula Gupta</h4>
              <p class="card-text">University of Delhi South Campus</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/wie-3.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Shobha Sundar Ram</h4>
              <p class="card-text">IIIT, Delhi</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/wie-4.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Harshita Tolani</h4>
              <p class="card-text">SAC/ISRO, Ahmedabad</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/wie-5.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Kriti Khatri</h4>
              <p class="card-text">IN-SPACe, Ahmedabad</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/wie-6.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Beenamole K.S.</h4>
              <p class="card-text">LRDE/DRDO, Bangalore</p>
            </div>
          </div>
          
          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/wie-7.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Anwesha Khasnobish</h4>
              <p class="card-text">TCS Research, Kolkata</p>
            </div>
          </div>

        </div>

        <h2><span class="span_head">Young Professionals:</span></h2>

        <div class="row">

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/yp-1.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Somak Bhattacharyya</h4>
              <p class="card-text">IIT-BHU, Varanasi</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/yp-2.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Shruti Sinha</h4>
              <p class="card-text">SAC/ISRO, Ahmedabad</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/yp-3.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Malika Somanath</h4>
              <p class="card-text">IISc, Bangalore</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/yp-4.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Anamiya Bhattacharya</h4>
              <p class="card-text">SAC/ISRO, Ahmedabad</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/yp-5.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Zubair Akhter</h4>
              <p class="card-text">KAUST</p>
            </div>
          </div>

        </div>

        <h2><span class="span_head">PhD Initiative:</span></h2>

        <div class="row">

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/phd-1.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">C.V.N. Rao.</h4>
              <p class="card-text">SAC/ISRO, Ahmedabad</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/phd-2.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">A.R. Harish</h4>
              <p class="card-text">IIT, Kanpur</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/phd-3.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Karun Rawat.</h4>
              <p class="card-text">IIT, Roorkee</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/phd-4.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Ashwini Sawant.</h4>
              <p class="card-text">IIT, Guwahati</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/phd-5.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Ganga Prasad Pandey</h4>
              <p class="card-text">PDEU, Gandhinagar</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/phd-6.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Tushar Goel.</h4>
              <p class="card-text">NIT, Uttarakhand</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/phd-7.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Surya Prakash Singh</h4>
              <p class="card-text">IIIT, Bhubaneswar</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/phd-8.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Anirban Sarkar.</h4>
              <p class="card-text">IIT, Mandi</p>
            </div>
          </div>

        </div>


        <h2><span class="span_head">Student Paper Contest:</span></h2>

        <div class="row">

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/sp-1.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Amalendu Patnaik</h4>
              <p class="card-text">IIT, Roorkee</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/sp-2.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">S.C. Bera</h4>
              <p class="card-text">SAC/ISRO, Ahmedabad</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/sp-3.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Vijay Kumar Singh</h4>
              <p class="card-text">SAC, Ahmedabad</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/temp.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Senthil Kumar</h4>
              <p class="card-text">URSC, Bangalore</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/sp-5.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Deepak Ghodgaonkar </h4>
              <p class="card-text">DAIICT, Gandhinagar</p>
            </div>
          </div>

        </div>

        <h2><span class="span_head">Mentor-Mentee Initiative:</span></h2>

        <div class="row">

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/mm-1.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Y. P. Kosta</h4>
              <p class="card-text">Charusat University,Changa</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/mm-2.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Ratnajit Bhattacharjee</h4>
              <p class="card-text">IIT, Guwahati</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/mm-3.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Chandrakanta Kumar</h4>
              <p class="card-text">URSC/ISRO, Bangalore</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/mm-4.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Pratik Mevada</h4>
              <p class="card-text">SAC/ISRO, Ahmedabad</p>
            </div>
          </div>

        </div>

        <h2><span class="span_head">Website & IT:</span></h2>

        <div class="row">

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/ps-1.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Nikhil S. Arora</h4>
              <p class="card-text">IN-SPACe, Ahmedabad</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/ps-2.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Rakesh Kumar</h4>
              <p class="card-text">SAC/ISRO, Ahmedabad</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/ps-3.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">B Gowrish</h4>
              <p class="card-text">IIT, Roorkee</p>
            </div>
          </div>

        </div>

        <h2><span class="span_head">Publicity & Media:</span></h2>

        <div class="row">

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/pm-1.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Hina Yadav</h4>
              <p class="card-text">Delhi University</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/pm-2.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Jagdish M. Rathod</h4>
              <p class="card-text">BVM, Vallabh Vidyanagar</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/pm-3.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Manpuram Mahto</h4>
              <p class="card-text">NIT, Patna</p>
            </div>
          </div>

        </div>

        <h2><span class="span_head">Publications:</span></h2>

        <div class="row">

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/pub-1.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Vijay Shanker Tripathi</h4>
              <p class="card-text">MNNIT Allahabad, Prayagraj</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/pub-2.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Mrinal Kanti Mandal</h4>
              <p class="card-text">IIT, Kharagpur</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/pub-3.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Jawad Y Siddiqui</h4>
              <p class="card-text">University of Calcutta, Kolkata</p>
            </div>
          </div>
          
          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/pub-4.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Debdeep Sarkar</h4>
              <p class="card-text">IISc, Bangalore</p>
            </div>
          </div>

        </div>

        <!-- <h2 style="color: #EF4D48; font-weight: bold; font-size:2rem;">Advisory Committee :</h2>
        <ul>
          <li>Rajarajan A ,SHAR/ISRO, Sriharikota</li>
          <li>K. S. Dasgupta, DAIICT, Gandhinagar</li>
          <li>Apurba N. Bhattacharya, SAC/ISRO, Ahmedabad</li>
          <li>Surendra Pal, DRDO, Bangalore</li>
          <li>Pradeep K Jain, Director, NIT Patna</li>
          <li>M V Kartikeyan, Director, IIITDM Kancheepuram</li>
          <li>Hanumantha Rao, SAMEER, Chennai</li>
          <li>Anurag Kumar, ECIL, Hyderabad</li>
          <li>Nelson Fonsenca ESA</li>
          <li>Dr. B. K. Das, LRDE/DRDO, Hyderabad</li>
          <li>D. K. Singh, SAC/ISRO, Ahmedabad</li>
          <li>Sumitesh Sarkar , SAC/ISRO, Ahmedabad</li>
          <li>Sungtek Kahng, Univ. of Incheon, South Korea</li>
          <li>Subba Rao, Ananth Technology, Hyderabad</li>
          <li>M.V. Reddy, Astra Microwave Products, Hyderabad</li>
          <li>Vinod Chippalkatti, Centum , Bangalore</li>
          <li>Shashank Chaturvedi, IPR, Gandhinagar</li>
          <li>Nadagouda R., URSC/ISRO, Bangalore</li>
          <li>Ved Vyas Dwivedi, Indus Univ, Ahmedabad</li>
        </ul> -->
        <h2><span class="span_head">Advisory Committee :</span></h2>

        <div class="row">
          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/a-1.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Rajarajan A</h4>
              <p class="card-text">SHAR/ISRO, Sriharikota</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/a-2.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">K. S. Dasgupta</h4>
              <p class="card-text">DAIICT, Gandhinagar</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/a-3.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Apurba N. Bhattacharya</h4>
              <p class="card-text">SAC/ISRO, Ahmedabad</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/temp.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Surendra Pal</h4>
              <p class="card-text">DRDO, Bangalore</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/a-5.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Pradeep K Jain</h4>
              <p class="card-text">Director, NIT Patna</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/a-6.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">M V Kartikeyan</h4>
              <p class="card-text">Director, IIITDM Kancheepuram</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/a-7.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Hanumantha Rao</h4>
              <p class="card-text">SAMEER, Chennai</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/a-8.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Anurag Kumar</h4>
              <p class="card-text">ECIL, Hyderabad</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/a-9.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Nelson Fonsenca</h4>
              <p class="card-text">ESA</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/a-10.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Dr. B. K. Das</h4>
              <p class="card-text">LRDE/DRDO, Hyderabad</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/a-11.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">D. K. Singh</h4>
              <p class="card-text">SAC/ISRO, Ahmedabad</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/a-12.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Sumitesh Sarkar</h4>
              <p class="card-text">SAC/ISRO, Ahmedabad</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/a-13.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Sungtek Kahng</h4>
              <p class="card-text">Univ. of Incheon, South Korea</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/a-14.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Subba Rao</h4>
              <p class="card-text">Ananth Technology, Hyderabad</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/a-15.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">M.V. Reddy</h4>
              <p class="card-text">Astra Microwave Products, Hyderabad</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/a-16.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Vinod Chippalkatti</h4>
              <p class="card-text">Centum, Bangalore</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/a-17.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Shashank Chaturvedi</h4>
              <p class="card-text">IPR, Gandhinagar</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/temp.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Nadagouda R.</h4>
              <p class="card-text">URSC/ISRO, Bangalore</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/a-19.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Ved Vyas Dwivedi</h4>
              <p class="card-text">Indus Univ, Ahmedabad</p>
            </div>
          </div>
        </div>

        <!-- <h2 style="color: #EF4D48; font-weight: bold; font-size:2rem;">Local Organizing Committee :</h2>
        <ul>
          <li>Jayesh Thakkar, SAC/ISRO, Ahmedabad</li>
          <li>Kanhaiya Sharma, SIT, Pune</li>
          <li>Vineet , IIT-Roorkee</li>
          <li>Yogesh Tyagi, SAC/ISRO, Ahmedabad</li>
          <li>Vrishank Shah, Indus Univ., Ahmedabad</li>
          <li>Amit Nihalchandani, SAC/ISRO, Ahmedabad</li>
          <li>Pankaj Bhavsar, SAC/ISRO, Ahmedabad</li>
          <li>Ravi Hegde, IIT, Gandhinagar</li>
          <li>Shilpi Gupta, SVNIT, Surat</li>
          <li>S.K. Pathak, IPR, Gandhinagar</li>
          <li>S. Krishna Prasad, SAC/ISRO, Ahmedabad</li>
        </ul> -->
        <h2><span class="span_head">Local Organizing Committee :</span></h2>

        <div class="row">
          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/l-1.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Jayesh Thakkar</h4>
              <p class="card-text">SAC/ISRO, Ahmedabad</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/l-2.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Kanhaiya Sharma</h4>
              <p class="card-text">SIT, Pune</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/temp.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Vineet</h4>
              <p class="card-text">IIT-Roorkee</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/l-4.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Yogesh Tyagi</h4>
              <p class="card-text">SAC/ISRO, Ahmedabad</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/l-5.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Vrishank Shah</h4>
              <p class="card-text">Indus Univ., Ahmedabad</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/l-6.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Amit Nihalchandani</h4>
              <p class="card-text">SAC/ISRO, Ahmedabad</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/l-7.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Pankaj Bhavsar</h4>
              <p class="card-text">SAC/ISRO, Ahmedabad</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/l-8.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Ravi Hegde</h4>
              <p class="card-text">IIT, Gandhinagar</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/l-9.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">Shilpi Gupta</h4>
              <p class="card-text">SVNIT, Surat</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/l-10.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">S.K. Pathak</h4>
              <p class="card-text">IPR, Gandhinagar</p>
            </div>
          </div>

          <div class="card col-lg-4 col-md-4 col-sm-6">
            <center>
              <img class="card-img-top" src="./images/oc/l-11.png" alt="Card image">
            </center>
            <div class="card-body">
              <h4 class="card-title">S. Krishna Prasad</h4>
              <p class="card-text">SAC/ISRO, Ahmedabad</p>
            </div>
          </div>
        </div>



      </div>
      <!-- <div class="col-md-12">
        <img src="images/uc.png" class="img-fluid" alt="Under Construction" width="100%">
      </div> -->
  </section>


  <!-- sponsors section -->

  <?php include 'sponsors.php'; ?>

  <!-- end sponsprs section -->

  <?php include 'include/footer.php'; ?>


</body>

</html>