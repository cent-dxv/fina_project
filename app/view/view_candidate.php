<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="java.js"></script>
</head>

<body>

  <style>
    .nav-link {
      color: #EC4D37;
    }

    li a:focus {
      color: rgb(255, 255, 255);

      /* background-color: rgb(228, 110, 208); */
      border-bottom: 5px solid #EC4D37;
    }
    .bg{
      background:#FFFFFF;
    }
  </style>
  <!-- heading and titles -->
  <div class="jumbotron bg text-dark mb-5 ">
    <div class="container ">
      <div class="container d-flex justify-content-start ">
        <div>
          <h3 class="display-4  pt-4 fw-normal  ">form title </h3>
          <p class="lead " text-center>
            description
            Lorem, ipsum dolor sit amet consectetur adipisicing elit.

          </p>
          <style>
            .nav {
              margin: auto 0;
            }
          </style>
          <ul class="nav  justify-content-center">
            <li class="nav-item">
              <a class="nav-link  text-light  active" aria-current="page" href="#">view</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#">create</a>
            </li>

          </ul>

        </div>

      </div>
    </div>
  </div>

  <style>
    body {
      background-color: #EEF3F9;
      /* rgb(229, 236, 246); */
       /* #FCF6F5FF; */
      /* #ffffffff; */
      /* #FCF6F5FF*/
     
    }
  </style>
  <!--   display alrady created cards -->

  <?php
  include_once "../app/view/templet/view_elements.php";
  $elements = new view_elements;
 


  ?>

  <!--   card  -->
  <div class="container d-flex justify-content-center">
    <div class="col-lg-9 justify-content-center">
      <div class="card mt-5 m-3 ">
        <!-- card head  -->
        <?php $defualt = "question type"  ?>
        <h5 class="card-header bg-dark text-light">questions-form</h5>
        <div class="card-body  ">
          <!-- input type -->
          <div class="input-group mb-3">
            </style>
            <!-- input text -->
            <input type="text" name="question_text" form="question_form" class="form-control in" aria-label="Text input with dropdown button">
            <input type="hidden" name="question_type" form="question_form" value="<?php echo  isset($_GET['q_type']) ?  $_GET['q_type'] : "" ?>">

            <!-- button button   -->
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
              <?php echo isset($_GET['q_type']) ?  tx($_GET['q_type']) : tx($defualt);

              function tx($ch)
              {
                if ($ch == "Check Box") {
                  return  " <i class='bi bi-square mt-1 mx-1' style='font-size:13px'></i>
                  " . "Check Box";
                }
                if ($ch == "Radio Button") {
                  return  " <i class='bi bi-circle mt-1 mx-1' style='font-size:13px'></i>
                  " . "Radio button";
                }
                if ($ch == "Paragraph") {
                  return  " <i class='bi-text-paragraph mt-1 mx-1' style='font-size:15px'></i>
                  " . "Paragraph";
                }
                if ($ch == "Short Answer") {
                  return  " <i class='bi bi-card-text mt-1 mx-1' style='font-size:15px'></i>
                  " . "Short Answer";
                } else return "<i class=' mt-3 mx-1 bi bi-patch-question'></i>  $ch ";
              }
              ?>
            </button>

            <!-- drop down  -->
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
              <li><a class="dropdown-item active" href="candidate?q_type=Short Answer">
                  <i class="bi bi-card-text mt-1 ml-1" style="font-size:12px"></i>
                  Short Answer</a></li>
              <li><a class="dropdown-item" href="candidate?q_type=Check Box">
                  <i class="bi bi-square mt-1 ml-1" style="font-size:12px"></i>
                  Check Box</a></li>
              <li><a class="dropdown-item" href="candidate?q_type=Radio Button">
                  <i class="bi bi-circle mt-1 ml-1" style="font-size:12px"></i>
                  Radio Button</a></li>
              <li><a class="dropdown-item" href="candidate?q_type=Paragraph">
                  <i class="bi bi-text-paragraph mt-1 ml-1" style="font-size:12px"></i>
                  paragraph</a></li>
            </ul>
          </div>





          <div style="min-height:70px">

            <!-- radio check box and other buttons -->
            <?php
            include_once "../app/view/templet/elements.php";
            $element = new elements;
            if (isset($_GET['q_type'])) {

              if ($_GET['q_type'] == 'Check Box') {
                $element->Check_Box();
              }
              if ($_GET['q_type'] == 'Radio Button') {
                $element->Radio();
              }
              if ($_GET['q_type'] == 'Short Answer') {
                $element->Short();
              }
              if ($_GET['q_type'] == 'Paragraph') {
                $element->Paragraph();
              }
            } else {
              // $element->Short();
            }

            ?>
          </div>
          <!--   
     <h5 class="card-title">Special title treatment</h5>
      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    
     -->

          <br>
          <hr>
          <style>
            i:hover {
              color: cornflowerblue;
            }

            .float-left {
              display: flex;
              float: left;
            }
          </style>
          <form id="question_form" action="candidate" mehthod="POST"></form>
          <div class="" style="display: flex;  float: right;">
            <!-- <a href="javascript:{}" onclick="document.getElementById('my_form').submit();">submit</a> -->
            <!-- <a href = " javascript:{}" onclick="document.getElementById('question_form').submit();">  -->
            <i class="bi bi-file-earmark-plus mx-5" id="submit" style="font-size: 25px; "></i>
            <!-- </a> -->
            <i class="bi bi-trash mx-5" style="font-size: 25px;"></i>
            <i class="bi bi-clipboard mx-5" style="font-size: 25px;"></i>
          </div>
          <script>
            var sub = document.getElementById("submit");
            sub.addEventListener("click", add);

            function add() {
              document.getElementById('question_form').submit();

            }
          </script>
        </div>
      </div>

    </div>



  </div>



</body>

</html>