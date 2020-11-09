@if(!Session::has('admin_name_session'))
<script>window.location = "adminlogin";</script>
<script  src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
@endif

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>


<title>{{ config('app.name', 'Laravel') }}</title>

<link rel="stylesheet" type="text/css" href="{{ asset('public/css/chatbox.css') }}" />
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

	<title>Chat</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.js"></script>
	<!--Coded With Love By Mutiullah Samim-->
  <div class="container-fluid h-100">
			<div class="row justify-content-center h-100">
				<div class="col-md-4 col-xl-3 chat"><div class="card mb-sm-3 mb-md-0 contacts_card">
					<div class="card-header">
						<div class="input-group">
							<input type="text" placeholder="Search..." name="" class="form-control search">
							<div class="input-group-prepend">
								<span class="input-group-text search_btn"><i class="fas fa-search"></i></span>
							</div>
						</div>
					</div>
					<div class="card-body contacts_body">
					<ui class="contacts">
            <ul class="nav side-menu">
            @foreach($admins as $admin)
                <!--<li class="active">-->
              @if ($admin->username == $rec_admin_det->username)
                <li class="active">
              @else
                <li>
              @endif
                  <div class="d-flex bd-highlight">
    								<div class="img_cont">
    									<img src="{{url('public/gentelella-master/production/images/img.jpg')}}" class="rounded-circle user_img">
    									<!--<span class="online_icon"></span>-->
    								</div>
                      @if ($admin->username == $rec_admin_det->username)
                        <div class="user_info" "mycontats">
        									<span style="color:white; font-weight:bold">{{$admin->username}}</span>
        									<!--<p>{{$admin->username}} is online</p>-->
                        </div>
                      @else
                        <div class="user_info">
                          <span><a style="color:black" href="../../chatwithadmin/{{session('admin_session')}}/{{$admin->id}}">{{$admin->username}}</a></span>
                          <!--<p>{{$admin->username}} is online</p>-->
                        </div>
                      @endif
    							</div>
    						</li>
            @endforeach
						</ui>
					</div>
					<div class="card-footer"></div>
				</div></div>
				<div class="col-md-8 col-xl-6 chat">
					<div class="card">
						<div class="card-header msg_head">
							<div class="d-flex bd-highlight">
								<div class="img_cont">
									<img src="{{url('public/gentelella-master/production/images/img.jpg')}}" class="rounded-circle user_img">
									<span class="online_icon"></span>
								</div>
								<div class="user_info">
									<span>Chat with <b>{{$rec_admin_det->username}}</b></span>
									<!--<p>1767 Messages</p>-->
								</div>
								<div class="video_cam">
                  <!--
                  <span><i class="fas fa-video"></i></span>
									<span><i class="fas fa-phone"></i></span>
                -->
                </div>
							</div>
							<!--<span id="action_menu_btn"><i class="fas fa-ellipsis-v"></i></span>
							<div class="action_menu">
								<ul>
									<li><i class="fas fa-user-circle"></i> View profile</li>
									<li><i class="fas fa-users"></i> Add to close friends</li>
									<li><i class="fas fa-plus"></i> Add to group</li>
									<li><i class="fas fa-ban"></i> Block</li>
								</ul>
							</div>-->
						</div>
						<div class="card-body msg_card_body">
            @foreach ($chats as $chat)
                  @if ($rec_admin_det->id == $chat->rec_id && $sen_admin_det->id == $chat->sender_id)
                    <div class="d-flex justify-content-start mb-4">
    								<div class="img_cont_msg">
    									<img src="{{url('public/gentelella-master/production/images/img.jpg')}}" class="rounded-circle user_img_msg">
    								</div>
    								<div class="msg_cotainer" "anyClass">
                			{{$chat->messages}}
    									<span class="msg_time">8:40 AM, Today</span>
    								</div>
    							</div>
                  @endif
      				@endforeach
              <!--<div class="d-flex justify-content-end mb-4">
								<div class="msg_cotainer_send">
									Hi Khalid i am good tnx how about you?
									<span class="msg_time_send">8:55 AM, Today</span>
								</div>
								<div class="img_cont_msg">
							<img src="{{url('public/gentelella-master/production/images/img.jpg')}}" class="rounded-circle user_img_msg">
								</div>
						 </div>-->
						</div>
          <div class="card-footer">
							<div class="input-group">
								<div class="input-group-append">
									<span class="input-group-text attach_btn"><i class="fas fa-paperclip"></i></span>
								</div>
								<input class="form-control type_msg" name="usermsg" placeholder="Type your message..."></input>
								<div class="input-group-append">
									<button type="submit" class="input-group-text send_btn" name="submitmsg" id="submitmsg"><i class="fas fa-location-arrow"></i></button>
								</div>
							</div>
						</div>
        	</div>
				</div>
			</div>
		</div>

<script>
  var $myCon = $('.mycontats').addClass('.active');

  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });


  $(document).ready(function() {
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

  $('#submitmsg').on('click', function() {
    console.log("fdsa");
    //event.preventDefault();
    var name = "dsf";
    var email = "sdf";
    var phone = "sfa";
    var city = "vsv";
    var password = "vasads";
      if(name!="" && email!="" && phone!="" && city!=""){
        //$("#butsave").attr("disabled", "disabled");
          $.ajax({
              url: "{{url ('sending') }}",
              type: "POST",
              data: {
                  _token: $("#csrf").val(),
                  type: 1,
                  sender_id: name,
                  rec_id: email,
                  messages: phone,
              },
              cache: false,
              success: function(dataResult){
                  console.log(dataResult);
                  var dataResult = JSON.parse(dataResult);
                  if(dataResult.statusCode==200){
                    window.location = "";
                  }
                  else if(dataResult.statusCode==201){
                     alert("Error occured !");
                  }
              }
          });
        }
        else{
            alert('Please fill all the field !');
        }
    });
  });

</script>
