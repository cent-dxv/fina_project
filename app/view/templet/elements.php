<?php

class elements
{

  public function Check_Box()
  {

echo <<<_end
          <div class="container " id="newdiv">
              <div class="d-flex ">
                <i class="bi bi-square mt-2 mx-2" style="font-size:20px"></i>
                <input name = "option_1" form = "question_form" class="form-control mx-2 form_box" type="text" placeholder="Check Box Option #" aria-label="default input examp">
              </div>

              <div class="d-flex my-3" id="clondiv">
                <i class="bi bi-square mt-2 mx-2" style="font-size:20px"></i>
                <input name = "option_2" form = "question_form"  class="form-control mx-2 form_box" type="text" placeholder="Check Box Option #" aria-label="default input examp">
              </div>
              <div class="d-flex my-3" id="clondiv">
                <i class="bi bi-square mt-2 mx-2" style="font-size:20px"></i>
                <input name = "option_3" form = "question_form" class="form-control mx-2 form_box" type="text" placeholder="Check Box Option #" aria-label="default input examp">
              </div>

              <!-- <a href="javascript: add()"> -->
              <div class="d-flex my-4 ">
                <i class="bi bi-plus-square mt-2 mx-2" style="font-size:20px"></i>
                <input class="form-control mx-2 form_box add_input" disabled type="text" placeholder="add more option #" aria-label="default input examp">
              </div>


              <!-- </a> -->
            </div>




            <style>
              .form_box {


                border: 0;
                border-bottom: 2px solid #adb5bd;
                border-radius: 0;

              }


              .form_box:focus {
                /* border: 0; */
                outline: 0px !important;
                -webkit-appearance: none;
                box-shadow: none !important;
                background-color: #EDFAFD;
              }
            </style>

 _end;

  }


public function Radio()
{

echo <<<_end
        <div class="container " id="newdiv">
            <div class="d-flex my-3">
              <i class="bi bi-circle mt-2 mx-2" style="font-size:22px"></i>
              <input name = "option_1" form = "question_form" class="form-control mx-2 form_box" type="text" placeholder="Radio button Option #" aria-label="default input examp">
            </div>

            <div class="d-flex my-3" id="clondiv">
              <i class="bi bi-circle mt-2 mx-2" style="font-size:22px"></i>
              <input  name = "option_2" form = "question_form" class="form-control mx-2 form_box" type="text" placeholder="Radio button Option #" aria-label="default input examp">
            </div>
            <div class="d-flex my-3" id="clondiv">
              <i class="bi bi-circle mt-2 mx-2" style="font-size:22px"></i>
              <input  name = "option_3" form = "question_form" class="form-control mx-2 form_box" type="text" placeholder="Radio button Option #" aria-label="default input examp">
            </div>

            <!-- <a href="javascript: add()"> -->
            <div class="d-flex my-4 ">
              <i class="bi bi-plus-circle mt-2 mx-2" style="font-size:22px"></i>
              <input class="form-control mx-2 form_box add_input" disabled type="text" placeholder="add more option #" aria-label="default input examp">
            </div>


            <!-- </a> -->
          </div>




          <style>
            .form_box {


              border: 0;
              border-bottom: 2px solid #adb5bd;
              border-radius: 0;

            }


            .form_box:focus {
              /* border: 0; */
              outline: 0px !important;
              -webkit-appearance: none;
              box-shadow: none !important;
              background-color: #EDFAFD;
            }
          </style>

_end;

}

public function short(){
 echo <<<_en
 
      <div class="form-floating"> 
      <textarea  name = "option_1" form = "question_form" class="form-control form_box"   placeholder="Leave a placeholde" id="floatingTextarea2" style="height: 100px"></textarea>
      <label for="floatingTextarea2">
      <i class="bi bi-card-text mt-1 ml-1" style="font-size:12px"></i>
      leave a place holder for a better ux</label>
      </div>
      <style>
      .form_box {


        border: 0;
        border-bottom: 2px solid #adb5bd;
        border-radius: 0;

      }


      .form_box:focus {
        /* border: 0; */
        outline: 0px !important;
        -webkit-appearance: none;
        box-shadow: none !important;
        background-color: #EDFAFD;
      }
    </style>
 _en;

}

public function Paragraph(){
  echo <<<_en
  
       <div class="form-floating"> 
       <textarea name = "option_1" form = "question_form" class="form-control form_box"   placeholder="Leave a placeholder for users" id="floatingTextarea2" style="height: 100px"></textarea>
       <label for="floatingTextarea2">
       <i class="bi bi-text-paragraph mt-1 ml-1" style="font-size:12px"></i>
       leave a place holder for better ux</label>
       </div>
       <style>
       .form_box {
 
 
         border: 0;
         border-bottom: 2px solid #adb5bd;
         border-radius: 0;
 
       }
 
 
       .form_box:focus {
         /* border: 0; */
         outline: 0px !important;
         -webkit-appearance: none;
         box-shadow: none !important;
         background-color: #EDFAFD;
       }
     </style>
  _en;
 
 }

 
}




?>









