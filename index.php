<html>
	<head>
		<script src="https://apis.google.com/js/platform.js" async defer></script>
		<meta name="google-signin-client_id" content="537794575048-u6hiueqblvtjkbertd8stdume657vbi6.apps.googleusercontent.com">
		<script type="text/javascript">
			function onSignIn(googleUser)
			{
			  
			  var profile = googleUser.getBasicProfile();
			  document.getElementById("uid").innerHTML=profile.getId();
			  document.getElementById("uname").innerHTML=profile.getName();
			  document.getElementById("uemail").innerHTML=profile.getEmail();
			  var url=profile.getImageUrl().replace("https:","http:");
			  //alert(profile.getImageUrl());
			  alert(url);
			  document.getElementById("myImg").src=url;
			  console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
			  console.log('Name: ' + profile.getName());
			  console.log('Image URL: ' + profile.getImageUrl());
			  console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
			}
			
			function signOut() {
			var auth2 = gapi.auth2.getAuthInstance();
			auth2.signOut().then(function () {
			  console.log('User signed out.');
			});
			}
		
		</script>
	</head>
	<body>
		<div class="g-signin2" data-onsuccess="onSignIn"></div>
		<a href="#" onclick="signOut();">Sign out</a>
		<div id="info">
			<p id="uid" />
			<p id="uname" />
			<img id="myImg" src="" alt="not found" width="107" height="98">
			<p id="uemail" />
		</div>
		
	</body>
</html>