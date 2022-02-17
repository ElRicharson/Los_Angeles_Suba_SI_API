$(document).ready(function(){
  var studentsList;
  function getall() {
    $(".studentsList").html(" ");
    $.ajax({
      url:"http://localhost:81/Los_Angeles_Suba_SI_API/studentmanagement/api/getStudents.php",
      method:"GET",
      success:function(data) {
        studentsList = JSON.parse(data);
        console.log(studentsList);
        for (var i = 0; i < studentsList.length; i++) {
          $(".studentsList").append('<tr><td><b>Nombre: </b>'+
          studentsList[i]["name"]+
          '</td><td><b>Apellido: </b>'+
          studentsList[i]["lastname"]+
          '</td><td><b>Grado: </b>'+
          studentsList[i]["grade"]+
          '</td><td><b>Estado de mora: </b>'+
          studentsList[i]["debt"]+
          '</td><td><b>Rama: </b>'+
          studentsList[i]["branch"]+
          '</td><td><button class="update-btn">Editar</button>'+
          '</td><td><button class="delete-btn">Eliminar</button>'+
          '<input type="hidden" value="" class="stdID"></input>'+
          '</td></tr>');
        }
      }
    })
  }
  getall();
  
  //update-btn-on-click
  $("body").on("click",".studentsList .update-btn",function() {
    $("li").hide();
    $(".edit-form").show();
    var index = $(this).parents("li").index();
    $(".edit-form .name").val(studentsList[index]["name"]);
    $(".edit-form .lastname").val(studentsList[index]["lastname"]);
    $(".edit-form .grade").val(studentsList[index]["grade"]);
    $(".edit-form .debt").val(studentsList[index]["debt"]);
    $(".edit-form .branch").val(studentsList[index]["branch"]);
    $(".edit-form .sid").val(studentsList[index]["id"]);
  });
  
  // save-student-to-database
  $(".save-student").click(function() {
    var sName = $(".edit-form .name").val();
    var sFname = $(".edit-form .lastname").val();
    var sgrade = $(".edit-form .grade").val();
    var sdebt = $(".edit-form .debt").val();
    var sBranch = $(".edit-form .branch").val();
    var sID = $(".edit-form .sid").val();
  
    //send to php file via ajax
    $.ajax({
      url:"http://localhost:81/Los_Angeles_Suba_SI_API/studentmanagement/api/editStudents.php",
      method:"POST",
      data:{
        sid : sID,
        name : sName,
        lastname : sFname,
        grade : sgrade,
        debt : sdebt,
        branch : sBranch
      },
          success:function(data) {
          getall();
        }
    })
  })
  // Add a student to database
  $(".submit-student").click(function() {
    var sName = $(".name").val();
    var sFname = $(".lastname").val();
    var sgrade = $(".grade").val();
    var sdebt = $(".debt").val();
    var sBranch = $(".branch").val();
  
    $.ajax({
      url:"http://localhost:81/Los_Angeles_Suba_SI_API/studentmanagement/api/addStudents.php",
      method:"POST",
      data:{
        name :sName,
        lastname :sFname,
        grade :sgrade,
        debt :sdebt,
        branch :sBranch
      },
      success:function(data) {
      getall();
    }
    })
  })
  $("body").on("click",".delete-btn",function() {
    var index = $(this).parents("li").index();
    $(".studentsList .stdID").val(studentsList[index]["id"]);
    var studentID =$(".studentsList .stdID").val();
    $.ajax({
      url:"http://localhost:81/Los_Angeles_Suba_SI_API/studentmanagement/api/deleteStudent.php",
      method:"POST",
      data:{
        sid :studentID
      },
      success:function(data) {
        $(this).parent().remove();
        getall();
      }
    })
  })
  $(".downArrow").click(function() {
    $(".add-form").slideToggle("slow");
  })
  $(".save-student").click(function() {
  $(".edit-form").hide();
  })
  $(".submit-student").click(function() {
  $(".add-form").hide();
  })
  $(".close").click(function() {
  $(".add-form").hide();
  })
  $(".close").click(function() {
  $(".edit-form").hide("fast",function() {
  getall();
  });
  })
  })