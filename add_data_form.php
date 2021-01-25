<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

                    <form class="needs-validation" novalidate>
                        <div class="form-row">
                          <div class="col-md-4 mb-3">
                            <label for="validationCustom01">Customer Name</label>
                            <input type="text" class="form-control" id="Customer_Name" placeholder="Customer Name" value="" required>
                            <div class="valid-feedback">
                              Looks good!
                            </div>
                          </div>
                          <div class="col-md-4 mb-3">
                            <label for="validationCustom02">Customer ID</label>
                            <input type="text" class="form-control" id="Num_ID" placeholder="Customer ID" value="" required>
                            <div class="valid-feedback">
                              Looks good!
                            </div>
                          </div>
                          <div class="col-md-4 mb-3">
                            <label for="validationCustom03">Customer info</label>
                            <input type="text" class="form-control" id="Customer_info" placeholder="Contace info" required>
                            <div class="invalid-feedback">
                              Please provide a valid city.
                            </div>
                          </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="validationCustomPM">PM Name</label>
                                <select class="custom-select" id="PM_Name" required>
                                    <option value="---รอ Assign---">---รอ Assign---</option>
                                    <option value="ฐานิตา ธิช่างทอง (ขิม)">ฐานิตา ธิช่างทอง (ขิม)</option>
                                    <option value="ภาณุพงศ์ กวดกิจการ (เจมส์)">ภาณุพงศ์ กวดกิจการ (เจมส์)</option>
                                    <option value="พีรวิทย์ จับใจนาย (อัพ)">พีรวิทย์ จับใจนาย (อัพ)</option>
                                    <option value="ณัฏฐ์ สุวัฒนโฆสานุวัตร (นัท)">ณัฏฐ์ สุวัฒนโฆสานุวัตร (นัท)</option>
                                    <option value="ธนสาร ผิวบาง (ต้น)">ธนสาร ผิวบาง (ต้น)</option>
                                    <option value="กาญจนา ดวงต๋า (ออม)">กาญจนา ดวงต๋า (ออม)</option>
                                    <option value="ชมพูนุท เตียนมีผล (มีน)">ชมพูนุท เตียนมีผล (มีน)</option>
                                    <option value="วิภาวี บุญญา (มิกกี้)">วิภาวี บุญญา (มิกกี้)</option>
                                    <option value="มัณฑนา ภูครองทุ่ง (เหมียว)">มัณฑนา ภูครองทุ่ง (เหมียว)</option>
                                    <option value="พัชณิยา สุขแก้ว (แอ้)">พัชณิยา สุขแก้ว (แอ้)</option>
                                    <option value="กิตติชัย อุตม์สุรินทร์ (อัพ)">กิตติชัย อุตม์สุรินทร์ (อัพ)</option>
                                </select>                              
                                <div class="invalid-feedback">
                                    Please choose a name.
                                  </div>
                              </div>
                          <div class="col-md-4 mb-3">
                            <label for="validationCustom04">Sale name</label>
                            <input type="text" class="form-control" id="Sale_Name" placeholder="Sale name" required>
                            <div class="invalid-feedback">
                              Please provide a valid sale.
                            </div>
                          </div>
                          <div class="col-md-4 mb-3">
                            <label for="validationCustom05">Pre-Sale Name</label>
                            <input type="text" class="form-control" id="Pre_sale" placeholder="Pre-Sale" required>
                            <div class="invalid-feedback">
                              Please provide a valid Pre-sale.
                            </div>
                          </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-5 mb-3">
                                <label for="validationCustom06">Service</label>
                                <input type="text" class="form-control" id="Service" placeholder="Ex. Cloud[HP]+ Link VRF + Colo[TST]" required>
                                <div class="invalid-feedback">
                                  Please provide a valid Service.
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom07">SO</label>
                                <input type="text" class="form-control" id="SO_Num" placeholder="SO" required>
                                <div class="invalid-feedback">
                                  Please provide a valid SO.
                                </div>
                            </div>
                            <div class="input-group col-md-4 mb-3">
                                <div class="form-group">
                                    <label for="validationCustom08">SO file</label>
                                    <input type="file" class="inputstl" id="SO_File" name="sentfile1">
                                    <div class="invalid-feedback">
                                        Please provide a valid SO file.
                                    </div>      
                                </div>
                            </div>      
                            <div class="input-group col-md-4 mb-3">
                                <div class="form-group">
                                    <label for="validationCustom08">SO Terminate</label>
                                    <input type="file" class="inputstl" id="SO_Ter" name="sentfile9">
                                    <div class="invalid-feedback">
                                        Please provide a valid SO Terminate.
                                    </div>      
                                </div>
                            </div>      
                        </div>
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom09">Start Date</label>
                                <input type="date" class="form-control" id="Start_Date" placeholder="select date"  required>
                                <div class="valid-feedback">
                                  Looks good!
                                </div>
                              </div>
                              <div class="col-md-4 mb-3">
                                <label for="validationCustom10">End Date</label>
                                <input type="date" class="form-control" id="END_Date" placeholder="select date"  required>
                                <div class="valid-feedback">
                                  Looks good!
                                </div>
                              </div>
                        </div>
                        <div class="form-row">
                                <div class="col-md-3 mb-3">
                                    <label for="validationCustom10">PM</label>
                                    <input type="radio" id="service1" name="service" value="PM" >
                                    <div class="valid-feedback">
                                      Looks good!
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="validationCustom10">MNSP</label>
                                    <input type="radio" id="service2" name="service" value="MNSP" > 
                                    <div class="valid-feedback">
                                      Looks good!
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="validationCustom10">BCP</label>
                                    <input type="radio" id="service4" name="service" value="BCP" >
                                    <div class="valid-feedback">
                                      Looks good!
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="validationCustom10">Report</label>
                                    <input type="radio" id="service3" name="service" value="report" >
                                    <div class="valid-feedback">
                                      Looks good!
                                    </div>
                                </div>
                        </div>
                        <!-- <div id="PM" class="form-group" style="display:none">
                            <h2>PM</h2>
                            <div class="form-row">
                                <div class="input-group col-md-4 mb-3">
                                    <div class="form-group">
                                        <label for="validationCustom08">Confirm UAT</label>
                                        <input type="file" class="inputstl" id="Confirm_UAT" name="sentfile3">
                                        <div class="invalid-feedback">
                                            Please provide a valid UAT file.
                                        </div>      
                                    </div>
                                </div> 
                                <div class="input-group col-md-4 mb-3">
                                    <div class="form-group">
                                        <label for="validationCustom08">UAT</label>
                                        <input type="file" class="inputstl" id="UAT" name="sentfile4">
                                        <div class="invalid-feedback">
                                            Please provide a valid UAT file.
                                        </div>      
                                    </div>
                                </div>   
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustomPM">Status</label>
                                    <select class="custom-select" id="Status" required>
                                        <option value="in progress">in progress</option>
                                        <option value="UAT">UAT</option>
                                        <option value="complete">complete</option>
                                        <option value="hold">hold</option>
                                        <option value="Cancel">Cancel</option>
                                        <option value="Terminate">Terminate</option>
                                        <option value="Waiting Customer">Waiting Customer</option>
                                        <option value="Waiting Revise SO">Waiting Revise SO</option>                                    
                                    </select>                              
                                    <div class="invalid-feedback">
                                        Please choose a Status.
                                      </div>
                                  </div>
                            </div>
                        </div>
                        <div id="MNSP" class="form-group" style="display:none">
                            <h2>MNSP</h2>
                            <div class="form-row">
                                <div class="input-group col-md-4 mb-3">
                                    <div class="form-group">
                                        <label for="validationCustom08">Monitor</label>
                                        <input type="file" class="inputstl" id="Monitor" name="sentfile5">
                                        <div class="invalid-feedback">
                                            Please provide a valid Monitor file.
                                        </div>      
                                    </div>
                                </div>  
                            </div>
                        </div>
                            <div class="input-group col-md-4 mb-3" id="common" style="display:none">
                                <div class="form-group">
                                    <label for="validationCustom08">Diagram</label>
                                    <input type="file" class="inputstl" id="Diagram" name="sentfile2">
                                    <div class="invalid-feedback">
                                        Please provide a valid Diagram file.
                                    </div>      
                                </div>
                            </div>  
                        <div id="BCP" class="form-group" style="display:none">
                            <h2>BCP</h2> 
                            <div class="form-row">
                                <div class="col-md-5 mb-3">
                                    <label for="validationCustom06">Data BCP</label>
                                    <input type="text" class="form-control" id="Data_BCP" placeholder="Ex. Cloud[HP]+ Link VRF + Colo[TST]" required>
                                    <div class="invalid-feedback">
                                      Please provide a valid Service.
                                    </div>
                                </div>    
                            </div>
                        </div>
                        <div id="report" class="form-group" style="display:none">
                            <h2>Report</h2>
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustom09">Report due date</label>
                                    <input type="date" class="form-control" id="Due_Date" placeholder="กำหนดส่ง" value="" required>
                                    <div class="valid-feedback">
                                      Looks good!
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustom07">Detail</label>
                                    <input type="text" class="form-control" id="Detail" placeholder="Detail" required>
                                    <div class="invalid-feedback">
                                      Please provide a valid Deetail.
                                    </div>
                                </div>
    
                            </div>
                        </div> -->
                      </form>
                      
                      <script>
                      // Example starter JavaScript for disabling form submissions if there are invalid fields
                      (function() {
                        'use strict';
                        window.addEventListener('load', function() {
                          // Fetch all the forms we want to apply custom Bootstrap validation styles to
                          var forms = document.getElementsByClassName('needs-validation');
                          // Loop over them and prevent submission
                          var validation = Array.prototype.filter.call(forms, function(form) {
                            form.addEventListener('submit', function(event) {
                              if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                              }
                              form.classList.add('was-validated');
                            }, false);
                          });
                        }, false);
                      })();
                    //   function PMOnclick() {
                    //     var checkBox = document.getElementById("service1");
                    //     var text = document.getElementById("PM");
                    //     var text2 = document.getElementById("common");
                    //     if (checkBox.checked == true){
                    //         text.style.display = "block";
                    //         text2.style.display = "block";
                    //     } 
                    //     else {
                    //       text.style.display = "none";
                    //       text2.style.display = "none";
                    //     } 
                    // }
                    // function MNSPOnclick() {
                    //     var checkBox2 = document.getElementById("service2");
                    //     var text2 = document.getElementById("MNSP");
                    //     var text = document.getElementById("common");

                    //     if (checkBox2.checked == true){
                    //         text.style.display = "block";
                    //         text2.style.display = "block";
                    //     } 
                    //     else {
                    //       text.style.display = "none";
                    //       text2.style.display = "none";
                    //     }
                    // }
                    // function REOnclick() {
                    //     var checkBox2 = document.getElementById("service3");
                    //     var text2 = document.getElementById("report");
                    //     if (checkBox2.checked == true){
                    //       text2.style.display = "block";
                    //     } 
                    //     else {
                    //       text2.style.display = "none";
                    //     }
                    // }
                    // function BCPOnclick() {
                    //     var checkBox2 = document.getElementById("service4");
                    //     var text2 = document.getElementById("BCP");
                    //     if (checkBox2.checked == true){
                    //       text2.style.display = "block";
                    //     } 
                    //     else {
                    //       text2.style.display = "none";
                    //     }
                    // }

                      </script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>