<!-- Nguyễn Phạm Thành Tài - 1813891 -->

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giới thiệu</title>
    <link rel="stylesheet" href="/assignment2/public/styles/introduction.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <style>
        .diff_color {
            background: gray;
        }
        .my-custom-scrollbar {
        position: relative;
        height: 400px;
        overflow: auto;
        }
        .table-wrapper-scroll-y {
        display: block;
        }
        .mg10{
            margin: 10px;
        }
        
    </style>
</head>
<body>
    <?php require_once "./src/views/layouts/header.php"?>
    
    <div class="content">
        <?php require_once "./src/views/layouts/login.php"?>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="user-tab" data-toggle="tab" href="#home" role="tab" aria-controls="user" aria-selected="true">User</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="service-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="service" aria-selected="false">Service</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="price-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="price" aria-selected="false">Price</a>
        </li>
        </ul>
        <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="user" role="tabpanel" aria-labelledby="user-tab">1</div>
        <div class="tab-pane fade" id="service" role="tabpanel" aria-labelledby="service-tab">2</div>
        <div class="tab-pane fade" id="price" role="tabpanel" aria-labelledby="price-tab">3</div>
        </div>
    <?php require_once "./src/views/layouts/footer.php"?>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="/assignment2/public/scripts/script.js"></script>
    <script>
        //check function
        //////////////////////////
        function check_valid(name, des, image_path, task){
            var format = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/;
            if(name==""){
                alert("plese fill name field!");
                return false;
            } else if(des==""){
                alert("plese fill description field!");
                return false;
            } else if(image_path==""){
                alert("plese fill image's path field!");
                return false;
            } else if(task==""){
                alert("plese fill task field!");
                return false;
            } else if(name.length>26){
                alert("name is too long!")
                return false;
            } else if(des.length>1000){
                alert("the description is too long!")
                return false;
            } else if(image_path.length>100){
                alert("the image's path is too long!")
                return false;
            } else if(task.length>200){
                alert("the task is too long!")
                return false;
            } else if(format.test(name)){
                alert("the name field has special character!")
                return false;
            } else if(format.test(des)){
                alert("the description field has special character!")
                return false;
            } else if(format.test(task)){
                alert("the task field has special character!")
                return false;
            }
            return true;
        }
        function check_valid1(ptime, pmonth, pyear, punit){
            var format = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/;
            if(ptime==""){
                alert("plese fill package_in_time field!");
                return false;
            } else if(pmonth==""){
                alert("plese fill package_in_month field!");
                return false;
            } else if(pyear==""){
                alert("plese fill package_in_year field!");
                return false;
            } else if(punit==""){
                alert("plese fill unit field!");
                return false;
            } else if(ptime.length>9){
                alert("package_in_time is too long!")
                return false;
            } else if(pmonth.length>9){
                alert("package_in_month is too long!")
                return false;
            } else if(pyear.length>9){
                alert("package_in_year is too long!")
                return false;
            } else if(punit.length>10){
                alert("the unit is too long!")
                return false;
            } else if(format.test(punit)){
                alert("the unit field has special character!")
                return false;
            } else if(isNaN(ptime)){
                alert("package_in_time is not a number!")
                return false;
            } else if(isNaN(pmonth)){
                alert("package_in_month is not a number!")
                return false;
            } else if(isNaN(pyear)){
                alert("package_in_year is not a number!")
                return false;
            }
            return true;
        }
        //end check function
        //////////////////////////////
        //service page
        ///////////////////////////////////////////////////////
        //change
        $(document).on('click','#user-tab',function(){
            $('#user').removeClass('show');
            $('#user').removeClass('active');
            $('#service').removeClass('show');
            $('#service').removeClass('active');
            $('#price').removeClass('show');
            $('#price').removeClass('active');

            $('#user').addClass('show');
            $('#user').addClass('active');
            updateTable2();
        });

        $(document).on('click','#service-tab',function(){
            $('#user').removeClass('show');
            $('#user').removeClass('active');
            $('#service').removeClass('show');
            $('#service').removeClass('active');
            $('#price').removeClass('show');
            $('#price').removeClass('active');

            $('#service').addClass('show');
            $('#service').addClass('active');
            updateTable();
        });

        $(document).on('click','#price-tab',function(){
            $('#user').removeClass('show');
            $('#user').removeClass('active');
            $('#service').removeClass('show');
            $('#service').removeClass('active');
            $('#price').removeClass('show');
            $('#price').removeClass('active');

            $('#price').addClass('show');
            $('#price').addClass('active');
            updateTable1();
        });
        //
        $(document).ready(updateTable());

        function updateTable(){
            $.ajax({
          // The link we are accessing.
          url: "/assignment2/Admin/showService",
            
          // The type of request.
          type: "get",
            
          // The type of data that is getting returned.
          dataType: "html",

          success: function( strData ){
            var json_object = JSON.parse(strData);
            var data = '<div class="table-wrapper-scroll-y my-custom-scrollbar"><table class="table">'+
                            '<thead>'+
                                '<tr>'+
                                '<th class="pv">Delete<input type="checkbox" class="v_checkbox all" /></th>'+
                                '<th class="pv1">Edit</th>'+
                                '<th scope="col">SID</th>'+
                                '<th scope="col">Name</th>'+
                                '<th scope="col">Description</th>'+
                                '<th scope="col">Image</th>'+
                                '<th scope="col">Task</th>'+
                                '</tr>'+
                            '</thead>'+
                            '<tbody id="body_stable">';
            for (var i = 0; i < json_object.length; i++) {
                data=data+'<tr>';
                data=data+'<td class="pv"><input type="checkbox" class="v_checkbox" /></td>';
                data=data+'<td class="pv1"><input type="checkbox" class="v_checkbox1" /></td>';
                data=data+'<th scope="row">';
                data=data+json_object[i].SID;
                data=data+'</th>';
                data=data+'<td contenteditable="false" class="sname">';
                data=data+json_object[i].name;
                data=data+'</td>';
                data=data+'<td contenteditable="false" class="sdes">';
                data=data+json_object[i].description;
                data=data+'</td>';
                data=data+'<td contenteditable="false" class="simage">';
                data=data+json_object[i].image;
                data=data+'</td>';
                data=data+'<td contenteditable="false" class="stask">';
                data=data+json_object[i].task;
                data=data+'</td>';
                data=data+'</tr>';
            }
            data=data+'</tbody>';
            data=data+'</table></div>';
            data=data+'<button type="button" class="btn btn-success  mg10" id="sdel_button" disabled>Delete</button>';
            data=data+'<button type="button" class="btn btn-success mg10" id="sedit_button" disabled>Save change</button>';
            data=data+'<button type="button" class="btn btn-success mg10" id="sadd_button" >Add service</button>';
            document.getElementById("service").innerHTML = data;
		    }
      	});
        }

        //add data
        //////////////////////////
        $(document).on('click','#sadd_button',function(){
            var data = '<table class="table">'+
                            '<thead>'+
                                '<tr>'+
                                '<th scope="col">Name</th>'+
                                '<th scope="col">Description</th>'+
                                '<th scope="col">Image</th>'+
                                '<th scope="col">Task</th>'+
                                '</tr>'+
                            '</thead>'+
                            '<tbody id="body_stable">'+
                            '<tr>'+
                            '<td><input type="text" class="form-control" id="name_add" placeholder="Enter name"></td>'+
                            '<td><textarea class="form-control" id="des_add" rows="9" placeholder="Enter description"></textarea></td>'+
                            '<td><input type="text" class="form-control" id="image_add" placeholder="Enter image path"></td>'+
                            '<td><textarea class="form-control" id="task_add" rows="9" placeholder="Enter task"></textarea></td>'+
                            '</tr>'+
                            '</tbody>'+
                            '</table>'+'<br>';
            data=data + '<table class="table">'+
                            '<thead>'+
                                '<tr>'+
                                '<th scope="col">package_in_time</th>'+
                                '<th scope="col">package_in_month</th>'+
                                '<th scope="col">package_in_year</th>'+
                                '<th scope="col">unit</th>'+
                                '</tr>'+
                            '</thead>'+
                            '<tbody id="body_ptable">'+
                            '<tr>'+
                            '<td><input type="text" class="form-control" id="time_add_p" placeholder="Enter package_in_time"></td>'+
                            '<td><input type="text" class="form-control" id="month_add_p" placeholder="Enter package_in_month"></td>'+
                            '<td><input type="text" class="form-control" id="year_add_p" placeholder="Enter package_in_year"></td>'+
                            '<td><input type="text" class="form-control" id="unit_add_p" placeholder="Enter unit"></td>'+
                            '</tr>'+
                            '</tbody>'+
                            '</table>';
            data=data+'<button type="button" class="btn btn-info mg10" id="sreturn" >return</button>';
            data=data+'<button type="button" class="btn btn-success mg10" id="sadd_button_submit" >Submit add</button>';
            document.getElementById("service").innerHTML = data; 
        });
        //end add data
        ///////////////////////////

        //delete data
        ///////////////////////////
        var testing = function (e) {
        var submit = $('#sdel_button');
        var checkbox = $(this);
        if ($(this).is('td')||$(this).is('th')) {
            checkbox = $(this).find('input[type="checkbox"].v_checkbox');
        }

        submit.prop('disabled', true); // Disable submit button

        checkbox.prop('checked', !checkbox.is(':checked')); // Change checked property
        
        if (checkbox.hasClass('all')) { // If this is "all"
            $('.v_checkbox:not(.all)').prop('checked', checkbox.is(':checked'));  // Set all other to same as "all" 
            if (checkbox.is(':checked')) { // change colour of "all" tr
                checkbox.closest('tr').addClass('diff_color');  
            } else {
                checkbox.closest('tr').removeClass('diff_color');  
            }
        }

        var blnAllChecked = true; // Flag all of them as checked
        $('.v_checkbox:not(.all)').each(function() { // Loop through all checkboxes that aren't "all"
            if ($(this).is(':checked')) {
                $(this).closest('tr').addClass('diff_color');
                submit.prop('disabled', false);
            } else {
                $(this).closest('tr').removeClass('diff_color');
                blnAllChecked = false; // If one is not checked, flag all as not checked
            }
        });
        
        if (blnAllChecked) {
            $('.v_checkbox.all').closest('tr').addClass('diff_color');
            $('.v_checkbox.all').prop('checked', true);
        } else {
            $('.v_checkbox.all').closest('tr').removeClass('diff_color');
            $('.v_checkbox.all').prop('checked', false);
        }
        };

        $(document).on('click', '.pv', testing);
        $(document).on('click', 'input[type="checkbox"].v_checkbox', testing);
        //end delete
        ////////////////////////////////////////////////////////////////////////////////////

        //edit data
        ///////////////////////////
        var testing1 = function (e) {
        var submit = $('#sedit_button');
        var checkbox = $(this);
        if ($(this).is('td')) {
            checkbox = $(this).find('input[type="checkbox"].v_checkbox1');
        }

        submit.prop('disabled', true); // Disable submit button

        checkbox.prop('checked', !checkbox.is(':checked')); // Change checked property
        
        var blnAllChecked = true; // Flag all of them as checked
        $('.v_checkbox1:not(.all)').each(function() { // Loop through all checkboxes that aren't "all"
            if ($(this).is(':checked')) {
                $(this).closest('tr').children('.sname').attr('contenteditable','true');
                $(this).closest('tr').children('.sdes').attr('contenteditable','true');
                $(this).closest('tr').children('.simage').attr('contenteditable','true');
                $(this).closest('tr').children('.stask').attr('contenteditable','true');
                submit.prop('disabled', false); // enable submit if one is checked
            } else {
                $(this).closest('tr').children('.sname').attr('contenteditable','false');
                $(this).closest('tr').children('.sdes').attr('contenteditable','false');
                $(this).closest('tr').children('.simage').attr('contenteditable','false');
                $(this).closest('tr').children('.stask').attr('contenteditable','false');
                blnAllChecked = false; // If one is not checked, flag all as not checked
            }
        });
        };

        $(document).on('click', '.pv1', testing1);
        $(document).on('click', 'input[type="checkbox"].v_checkbox1', testing1);
        //end edit
        ////////////////////////////////////////////////////////////////////////////////////

        //submit delete
        ///////////////////////////////////////////////////////////////////////////////////////
        var submit_delete = function(e){
            var cont=confirm("Are you sure!");
            if(cont==0) return;
            $("#body_stable").find('tr').each(function(){
                if($(this).children('.pv').children('.v_checkbox').is(":checked")){
                    var sid = $(this).children('th').text();
                    $.ajax({
                        // The link we are accessing.
                        url: "/assignment2/Admin/deleteService/",
                            
                        // The type of request.
                        type: "POST",
                        data: {sid: sid},
                        // The type of data that is getting returned.
                        dataType: "html",
  
                        success: function (strData) {
                            if(strData!='true') alert("something went wrong!");
                            //alert(strData);
                        }
                    });
                    updateTable();
                    updateTable1();
                }
            });
        };
        $(document).on('click', '#sdel_button', submit_delete);
        //end submit delete
        /////////////////////////////////////////////////////////////////////////////////////////

        //submit change
        ///////////////////////////////////////////////////////////////////////////////////////
        var submit_change = function(e){
            var cont=confirm("Are you sure!");
            if(cont==0) return;
            $("#body_stable").find('tr').each(function(){
                if($(this).children('.pv1').children('.v_checkbox1').is(":checked")){
                    //////////////////////////////////////////////////////////////////
                    var sid = $(this).children('th').text();
                    var sname = $(this).children('.sname').text();
                    var sdes = $(this).children('.sdes').text();
                    var simage = $(this).children('.simage').text();
                    var stask = $(this).children('.stask').text();
                    var cont1 = check_valid(sname,sdes,simage,stask);
                    if(cont1==false) return;
                    $.ajax({
                        // The link we are accessing.
                        url: "/assignment2/Admin/updateService",
                            
                        // The type of request.
                        type: "POST",
                        data: {sid: sid, sname: sname, sdes: sdes, simage: simage, stask: stask},
                        // The type of data that is getting returned.
                        dataType: "html",
  
                        success: function (strData) {
                            if(strData!='true') alert("something went wrong!");
                            //alert(strData);
                        }
                    });
                    updateTable();
                    //////////////////////////////////////////////////////////////////
                }
            });
        };
        $(document).on('click', '#sedit_button', submit_change);
        //end submit change
        /////////////////////////////////////////////////////////////////////////////////////////

        //submit add
        /////////////////////////////////////////////////////////////////////////////////////////
        $(document).on('click','#sadd_button_submit',function(){
            var sname = $('#name_add').val();
            var sdes=$('#des_add').val();
            var simage=$('#image_add').val();
            var stask=$('#task_add').val();
            var ptime = $('#time_add_p').val();
            var pmonth=$('#month_add_p').val();
            var pyear=$('#year_add_p').val();
            var punit=$('#unit_add_p').val();
            //testing data here
            var cont1 = check_valid(sname,sdes,simage,stask);
            if(cont1==false) return;
            var cont2 = check_valid1(ptime,pmonth,pyear,punit);
            if(cont2==false) return;
            ////////////////////
            $.ajax({
                // The link we are accessing.
                url: "/assignment2/Admin/insertService",
                    
                // The type of request.
                type: "POST",
                data: {sname: sname, sdes: sdes, simage: simage, stask: stask, ptime: ptime, pmonth: pmonth, pyear: pyear, punit: punit},
                // The type of data that is getting returned.
                dataType: "html",

                success: function (strData) {
                    if(strData!='true') alert("something went wrong!");
                    //alert(strData);
                }
            });
            updateTable();
            updateTable1();
           
        });
        //end submit add
        /////////////////////////////////////////////////////////////////////////////////////////
        
        //return button
        ///////////////////////////////////////////////////
        $(document).on('click','#sreturn',function(){
            updateTable();
        });
        //end return button
        //////////////////////////////////////////////////
        //end service page
        //////////////////////////////////////////////////

        //price page
        ///////////////////////////////////////////////////
        $(document).ready(updateTable1());

        function updateTable1(){
            $.ajax({
          // The link we are accessing.
          url: "/assignment2/Price/showPrice",
            
          // The type of request.
          type: "get",
            
          // The type of data that is getting returned.
          dataType: "html",

          success: function( strData ){
            var json_object = JSON.parse(strData);
            var data = '<div class="table-wrapper-scroll-y my-custom-scrollbar"><table class="table">'+
                            '<thead>'+
                                '<tr>'+
                                '<th class="pv1_p">Edit</th>'+
                                '<th scope="col">SID</th>'+
                                '<th scope="col">package_in_time</th>'+
                                '<th scope="col">package_in_month</th>'+
                                '<th scope="col">package_in_year</th>'+
                                '<th scope="col">unit</th>'+
                                '</tr>'+
                            '</thead>'+
                            '<tbody id="body_ptable">';
            for (var i = 0; i < json_object.length; i++) {
                data=data+'<tr>';
                data=data+'<td class="pv1_p"><input type="checkbox" class="v_checkbox1_p" /></td>';
                data=data+'<th scope="row">';
                data=data+json_object[i].SID;
                data=data+'</th>';
                data=data+'<td contenteditable="false" class="spackage_in_time">';
                data=data+json_object[i].package_in_time;
                data=data+'</td>';
                data=data+'<td contenteditable="false" class="spackage_in_month">';
                data=data+json_object[i].package_in_month;
                data=data+'</td>';
                data=data+'<td contenteditable="false" class="spackage_in_year">';
                data=data+json_object[i].package_in_year;
                data=data+'</td>';
                data=data+'<td contenteditable="false" class="sunit">';
                data=data+json_object[i].unit;
                data=data+'</td>';
                data=data+'</tr>';
            }
            data=data+'</tbody>';
            data=data+'</table></div>';
            data=data+'<button type="button" class="btn btn-success mg10" id="pedit_button" disabled>Save change</button>';
            document.getElementById("price").innerHTML = data;
		    }
      	});
        }
        //edit data
        ///////////////////////////
        var testing1_p = function (e) {
        var submit = $('#pedit_button');
        var checkbox = $(this);
        if ($(this).is('td')) {
            checkbox = $(this).find('input[type="checkbox"].v_checkbox1_p');
        }

        submit.prop('disabled', true); // Disable submit button

        checkbox.prop('checked', !checkbox.is(':checked')); // Change checked property
        
        var blnAllChecked = true; // Flag all of them as checked
        $('.v_checkbox1_p:not(.all)').each(function() { // Loop through all checkboxes that aren't "all"
            if ($(this).is(':checked')) {
                $(this).closest('tr').children('.spackage_in_time').attr('contenteditable','true');
                $(this).closest('tr').children('.spackage_in_month').attr('contenteditable','true');
                $(this).closest('tr').children('.spackage_in_year').attr('contenteditable','true');
                $(this).closest('tr').children('.sunit').attr('contenteditable','true');
                submit.prop('disabled', false); // enable submit if one is checked
            } else {
                $(this).closest('tr').children('.spackage_in_time').attr('contenteditable','false');
                $(this).closest('tr').children('.spackage_in_month').attr('contenteditable','false');
                $(this).closest('tr').children('.spackage_in_year').attr('contenteditable','false');
                $(this).closest('tr').children('.sunit').attr('contenteditable','false');
                blnAllChecked = false; // If one is not checked, flag all as not checked
            }
        });
        };

        $(document).on('click', '.pv1_p', testing1_p);
        $(document).on('click', 'input[type="checkbox"].v_checkbox1_p', testing1_p);
        //end edit
        ////////////////////////////////////////////////////////////////////////////////////
        //submit change
        ///////////////////////////////////////////////////////////////////////////////////////
        var submit_change1_p = function(e){
            var cont=confirm("Are you sure!");
            if(cont==0) return;
            $("#body_ptable").find('tr').each(function(){
                if($(this).children('.pv1_p').children('.v_checkbox1_p').is(":checked")){
                    //////////////////////////////////////////////////////////////////
                    var sid = $(this).children('th').text();
                    var ptime = $(this).children('.spackage_in_time').text();
                    var pmonth = $(this).children('.spackage_in_month').text();
                    var pyear = $(this).children('.spackage_in_year').text();
                    var punit = $(this).children('.sunit').text();
                    $.ajax({
                        // The link we are accessing.
                        url: "/assignment2/Price/updatePrice/",
                            
                        // The type of request.
                        type: "POST",
                        data: {sid: sid, ptime: ptime, pmonth: pmonth, pyear: pyear, punit: punit},
                        // The type of data that is getting returned.
                        dataType: "html",
  
                        success: function (strData) {
                            if(strData!='true') alert("something went wrong!");
                            //alert(strData);
                        }
                    });
                    updateTable1();
                    //////////////////////////////////////////////////////////////////
                }
            });
        };
        $(document).on('click', '#pedit_button', submit_change1_p);
        //end submit change
        /////////////////////////////////////////////////////////////////////////////////////////
        //end price page
        ///////////////////////////////////////////////////
        //begin user page
        ////////////////////////////////////////////////////////
        $(document).ready(updateTable2());

        function updateTable2(){
            $.ajax({
          // The link we are accessing.
          url: "/assignment2/Admin/showUserList",
            
          // The type of request.
          type: "get",
            
          // The type of data that is getting returned.
          dataType: "html",

          success: function( strData ){
            var json_object = JSON.parse(strData);
            var data = '<div class="table-wrapper-scroll-y my-custom-scrollbar"><table class="table">'+
                            '<thead>'+
                                '<tr>'+
                                '<th class="pv_u">Delete<input type="checkbox" class="v_checkbox_u all" /></th>'+
                                '<th scope="col">UID</th>'+
                                '<th scope="col">Fist name</th>'+
                                '<th scope="col">Last name</th>'+
                                '<th scope="col">Adress</th>'+
                                '<th scope="col">Phone</th>'+
                                '<th scope="col">Email</th>'+
                                '</tr>'+
                            '</thead>'+
                            '<tbody id="body_utable">';
            for (var i = 0; i < json_object.length; i++) {
                data=data+'<tr>';
                data=data+'<td class="pv_u"><input type="checkbox" class="v_checkbox_u" /></td>';
                data=data+'<th scope="row">';
                data=data+json_object[i].UID;
                data=data+'</th>';
                data=data+'<td contenteditable="false" class="fname">';
                data=data+json_object[i].first_name;
                data=data+'</td>';
                data=data+'<td contenteditable="false" class="lname">';
                data=data+json_object[i].last_name;
                data=data+'</td>';
                data=data+'<td contenteditable="false" class="address">';
                data=data+json_object[i].address;
                data=data+'</td>';
                data=data+'<td contenteditable="false" class="phone">';
                data=data+json_object[i].phone;
                data=data+'</td>';
                data=data+'<td contenteditable="false" class="email">';
                data=data+json_object[i].email;
                data=data+'</td>';
                data=data+'</tr>';
            }
            data=data+'</tbody>';
            data=data+'</table></div>';
            data=data+'<button type="button" class="btn btn-success  mg10" id="udel_button" disabled>Delete</button>';
            document.getElementById("user").innerHTML = data;
		    }
      	});
        }
        //delete data
        ///////////////////////////
        var testing_u = function (e) {
        var submit = $('#udel_button');
        var checkbox = $(this);
        if ($(this).is('td')||$(this).is('th')) {
            checkbox = $(this).find('input[type="checkbox"].v_checkbox_u');
        }

        submit.prop('disabled', true); // Disable submit button

        checkbox.prop('checked', !checkbox.is(':checked')); // Change checked property
        
        if (checkbox.hasClass('all')) { // If this is "all"
            $('.v_checkbox_u:not(.all)').prop('checked', checkbox.is(':checked'));  // Set all other to same as "all" 
            if (checkbox.is(':checked')) { // change colour of "all" tr
                checkbox.closest('tr').addClass('diff_color');  
            } else {
                checkbox.closest('tr').removeClass('diff_color');  
            }
        }

        var blnAllChecked = true; // Flag all of them as checked
        $('.v_checkbox_u:not(.all)').each(function() { // Loop through all checkboxes that aren't "all"
            if ($(this).is(':checked')) {
                $(this).closest('tr').addClass('diff_color');
                submit.prop('disabled', false);
            } else {
                $(this).closest('tr').removeClass('diff_color');
                blnAllChecked = false; // If one is not checked, flag all as not checked
            }
        });
        
        if (blnAllChecked) {
            $('.v_checkbox_u.all').closest('tr').addClass('diff_color');
            $('.v_checkbox_u.all').prop('checked', true);
        } else {
            $('.v_checkbox_u.all').closest('tr').removeClass('diff_color');
            $('.v_checkbox_u.all').prop('checked', false);
        }
        };

        $(document).on('click', '.pv_u', testing_u);
        $(document).on('click', 'input[type="checkbox"].v_checkbox_u', testing_u);
        //end delete
        ////////////////////////////////////////////////////////////////////////////////////
         //submit delete
        ///////////////////////////////////////////////////////////////////////////////////////
        var submit_delete_u = function(e){
            var cont=confirm("Are you sure!");
            if(cont==0) return;
            $("#body_utable").find('tr').each(function(){
                if($(this).children('.pv_u').children('.v_checkbox_u').is(":checked")){
                    var UID = $(this).children('th').text();
                    $.ajax({
                        // The link we are accessing.
                        url: "/assignment2/Admin/deleteUser/",
                            
                        // The type of request.
                        type: "POST",
                        data: {UID: UID},
                        // The type of data that is getting returned.
                        dataType: "html",
  
                        success: function (strData) {
                            if(strData!='true') alert("something went wrong!");
                        }
                    });
                    updateTable2();
                }
            });
        };
        $(document).on('click', '#udel_button', submit_delete_u);
        //end submit delete
        /////////////////////////////////////////////////////////////////////////////////////////
        //end user page
        //////////////////////////////////////////////////////////
    </script>
</body>
</html>