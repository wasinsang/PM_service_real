
<html>
 <head>
  <title>Insert or Add Data using jQuery Dialogify with PHP Ajax</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://www.jqueryscript.net/demo/Dialog-Modal-Dialogify/dist/dialogify.min.js"></script>
 </head>
 <body>
  <div class="container">
   <br />
   <h3 align="center">Insert or Add Data using jQuery Dialogify with PHP Ajax</h3>
   <br />
   <div class="panel panel-default">
    <div class="panel-heading">
     <div class="row">
      <div class="col-md-6">
       <h3 class="panel-title">Employee Data</h3>
      </div>
      <div class="col-md-6" align="right">
       <button type="button" name="add_data" id="add_data" class="btn btn-success btn-xs">Add</button>
      </div>
     </div>
    </div>
    <div class="panel-body">
     <div class="table-responsive">
      <span id="form_response"></span>
      <table id="user_data" class="table table-bordered table-striped">
       <thead>
        <tr>
         <td>Name</td>
         <td>Gender</td>
         <td>Designation</td>
         <td>Age</td>
         <td>View</td>
        </tr>
       </thead>
      </table>
      
     </div>
    </div>
   </div>
  </div>
 </body>
</html>

<script type="text/javascript" language="javascript" >
$(document).ready(function(){
 
 var dataTable = $('#user_data').DataTable({
  "processing":true,
  "serverSide":true,
  "order":[],
  "ajax":{
   url:"fetch.php",
   type:"POST"
  },
  "columnDefs":[
   {
    "targets":[4],
    "orderable":false,
   },
  ],

 });

 $(document).on('click', '.view', function(){
  var id = $(this).attr('id');
  var options = {
   ajaxPrefix: '',
   ajaxData: {id:id},
   ajaxComplete:function(){
    this.buttons([{
     type: Dialogify.BUTTON_PRIMARY
    }]);
   }
  };
  new Dialogify('fetch_single.php', options)
   .title('View Employee Details')
   .showModal();
 });
 
 $('#add_data').click(function(){
  var options = {
   ajaxPrefix:''
  };
  new Dialogify('add_data_test.php', options)
   .title('Add New Employee Data')
   .buttons([
    {
     text:'Cancle',
     click:function(e){
      this.close();
     }
    },
    {
     text:'Insert',
     type:Dialogify.BUTTON_PRIMARY,
     click:function(e)
     {
      var image_data = $('#images').prop("files")[0];
      var form_data = new FormData();
      form_data.append('images', image_data);
      form_data.append('name', $('#name').val());
      form_data.append('address', $('#address').val());
      form_data.append('gender', $('#gender').val());
      form_data.append('designation', $('#designation').val());
      form_data.append('age', $('#age').val());
      form_data.append('ENDDate', $('#ENDDate').val());
      for (var value of form_data.values()) {
   console.log(value); 
}      $.ajax({
       method:"POST",
       url:'insert_data.php',
       data:form_data,
       dataType:'json',
       contentType:false,
       cache:false,
       processData:false,
       success:function(data)
       {
        if(data.error != '')
        {
         $('#form_response').html('<div class="alert alert-danger">'+data.error+'</div>');
        }
        else
        {
         $('#form_response').html('<div class="alert alert-success">'+data.success+'</div>');
         dataTable.ajax.reload();
         console.log(data.success); 
        }
       }
      });
     }
    }
   ]).showModal();
 });
 
//  INSERT INTO Report (Customer_Name, Num_ID, Customer_info, Start_Date, Due_Date, END_Date, PM_Name, Sale_Name, Pre_Sale, Service, SO_File, SO_Num, Detail) VALUES ('Name_Customer', 123, 'info_Customer', '1970-01-01', '1970-01-01', '1970-01-01', 'PMGroub', 'Sale_Name', 'Pre_sale_Name', 'Service', 'SO_File', 321, 'DetailReport')
});
</script>
