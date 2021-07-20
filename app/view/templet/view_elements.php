<?php 

class view_elements{
    public $controller;
    function __construct(){
        require_once "../app/core/controller.php";
        $this->controller = new Controller;
       

      $result = $this->controller->view();
      $rows = $result ->num_rows;

      $row = $result->fetch_array(MYSQLI_ASSOC);

      for($i = 1 ; $i<= $rows;$i++){ 
          $question = $row['question'] ;
          $question_type = $row['type'] ;
          $question_id = $row['question_id'];
         $this-> questions($question, $question_type ,$question_id );

          $row = $result->fetch_array(MYSQLI_ASSOC);
    }
  

    }

    public function questions($question,$question_type,$question_id ){
       
        switch  ($question_type){
            case 'Check Box': $this->Check_Box($question,$question_id ); break;
            case 'Radio Button': $this->Radio($question,$question_id); break;
            case 'Short Answer': $this->Short($question,$question_id); break;
            case 'Paragraph': $this->Paragraph($question,$question_id); break;
            
        }

      }

      
      
      function Check_Box($question,$question_id){
       
      $result = $this->controller->values($question_id);
      $rows = $result ->num_rows;
      
        $row = $result->fetch_array(MYSQLI_ASSOC);
        $question1 = $row['value'] ;
        $row = $result->fetch_array(MYSQLI_ASSOC);
        $question2 = $row['value'] ;
        $row = $result->fetch_array(MYSQLI_ASSOC);
        $question3 = $row['value'] ;
        $row = $result->fetch_array(MYSQLI_ASSOC);
$i = 1;

        echo <<<_end
        <style> .card{
        border: 0;
     
        }</style>
        <div class="container d-flex justify-content-center">
        <div class="col-lg-9 justify-content-center">
        <div class="card mt-1 m-3  shadow-sm p-3">
        <!-- card head  -->

       
        <div class="card-body  ">
            <!-- input type -->

            <div style="min-height:70px">

                <h4 class="card-title p-3">$i $question</h4>
                <ul class="list-group">
                    <li class="list-group-item">
                        <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                        $question1
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                        $question2
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                        $question3
                    </li>
                   
                    </ul>
                    </div>
                    <!--   
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>

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
            
            <div class="" style="display: flex;  float: right;">
                <i class="bi bi-file-earmark-plus mx-5" id="submitt" style="font-size: 25px; "></i>
                <i class="bi bi-trash mx-5" style="font-size: 25px;"></i>
                <i class="bi bi-clipboard mx-5" style="font-size: 25px;"></i>
            </div>
            
        </div>
        </div>

        </div>



        </div>



        
      _end;



    }

function Radio($question,$question_id){

            
      $result = $this->controller->values($question_id);
      $rows = $result ->num_rows;
      
        $row = $result->fetch_array(MYSQLI_ASSOC);
        $question1 = $row['value'] ;
        $row = $result->fetch_array(MYSQLI_ASSOC);
        $question2 = $row['value'] ;
        $row = $result->fetch_array(MYSQLI_ASSOC);
        $question3 = $row['value'] ;
        $row = $result->fetch_array(MYSQLI_ASSOC);
$i = 1;

        echo <<<_end
        <div class="container d-flex justify-content-center">
        <div class="col-lg-9 justify-content-center">
        <div class="card mt-1 m-3 ">
        <!-- card head  -->

       
        <div class="card-body  ">
            <!-- input type -->

            <div style="min-height:70px">

                <h4 class="card-title p-3">$i $question</h4>
               
                <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                $question1
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                $question2
                </label>
              </div>
              <div class="form-check">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
              <label class="form-check-label" for="flexRadioDefault2">
              $question3
              </label>
            </div>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
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
            
            <div class="" style="display: flex;  float: right;">
                <i class="bi bi-file-earmark-plus mx-5" id="submitt" style="font-size: 25px; "></i>
                <i class="bi bi-trash mx-5" style="font-size: 25px;"></i>
                <i class="bi bi-clipboard mx-5" style="font-size: 25px;"></i>
            </div>
            
        </div>
        </div>

        </div>



        </div>



        
      _end;

    }
    function Short($question,$question_id){
        $result = $this->controller->values($question_id);
        $rows = $result ->num_rows;
        
          $row = $result->fetch_array(MYSQLI_ASSOC);
          $question1 = $row['value'] ;
        
  $i = 1;
  
          echo <<<_end
          <div class="container d-flex justify-content-center">
          <div class="col-lg-9 justify-content-center">
          <div class="card mt-1 m-3 ">
          <!-- card head  -->
  
         
          <div class="card-body  ">
              <!-- input type -->
  
              <div style="min-height:70px">
  
                  <h4 class="card-title p-3">$i $question</h4>
                 
                  <input class="form-control" type="text" placeholder="$question1" aria-label="default input example">
                  </div>
                  <!--   
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
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
              
              <div class="" style="display: flex;  float: right;">
                  <i class="bi bi-file-earmark-plus mx-5" id="submitt" style="font-size: 25px; "></i>
                  <i class="bi bi-trash mx-5" style="font-size: 25px;"></i>
                  <i class="bi bi-clipboard mx-5" style="font-size: 25px;"></i>
              </div>
              
          </div>
          </div>
  
          </div>
  
  
  
          </div>
  
  
  
          
        _end;
    }
    function Paragraph($question,$question_id){

        $result = $this->controller->values($question_id);
        $rows = $result ->num_rows;
        
          $row = $result->fetch_array(MYSQLI_ASSOC);
          $question1 = $row['value'] ;

  $i = 1;
  
          echo <<<_end
          <div class="container d-flex justify-content-center">
          <div class="col-lg-9 justify-content-center">
          <div class="card mt-1 m-3 ">
          <!-- card head  -->
  
         
          <div class="card-body  ">
              <!-- input type -->
  
              <div style="min-height:70px">
  
                  <h4 class="card-title p-3">$i $question</h4>
                 
                  <div class="form-floating">
                  <textarea class="form-control" placeholder="$question1" id="floatingTextarea2" style="height: 100px"></textarea>
                  <label for="floatingTextarea2">$question1</label>
                </div>
                </div>
                <!--   
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
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
              
              <div class="" style="display: flex;  float: right;">
                  <i class="bi bi-file-earmark-plus mx-5" id="submitt" style="font-size: 25px; "></i>
                  <i class="bi bi-trash mx-5" style="font-size: 25px;"></i>
                  <i class="bi bi-clipboard mx-5" style="font-size: 25px;"></i>
              </div>
              
          </div>
          </div>
  
          </div>
  
  
  
          </div>
  
  
  
          
        _end;
        
    }

}


?>








