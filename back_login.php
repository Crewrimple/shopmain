<!DOCTYPE html>
<html lang="en">
<head>
	<style>
		
		body {
			padding: 0;
			margin:0;
			height: 100vh;
			display: flex;
			justify-content: center;
			align-items: center;
			background: linear-gradient(-30deg, #1ec4e9 0%,#673ab7 50%,#262626 50%,#607d8b 100%);
		}

		a {
			position: relative;
			padding: 25px 50px;
			text-decoration: none;
			color: #fff;
			font-size: 2em;
			text-transform: uppercase;
			font-family: sans-serif;
			letter-spacing: 4px;
			overflow: hidden;
			background: rgba(255,255,255,.1);
			box-shadow: 0 5px 5px rgba(0,0,0,.2);
		}

		a:before {
			content: '';
			position: absolute;
			top: 0;
			left: 0;
			width: 50%;
			height: 100%;
			background: rgba(255,255,255,.1);
		}

		a:after {
			content: '';
			position: absolute;
			top: 0;
			left: -100%;
			width: 100%;
			height: 100%;
			background: linear-gradient(90deg,transparent,rgba(255,255,255,.4),transparent);
			transition: 0.5s;
			transition-delay: 0.2s;
		}

		a:hover:after {
			left: 100%;
		}

		a span {
			position: absolute;
			display: block;
			transition: 0.5s ease;
		}

		a span:nth-child(1) {
			top: 0;
			left: 0;
			width: 0;
			height: 1px;
			background: #fff;

		}

		a:hover span:nth-child(1) {
			width: 100%;
			transform: translateX(100%);
		}

		a span:nth-child(3) {
			bottom: 0;
			right: 0;
			width: 0;
			height: 1px;
			background: #fff;

		}

		a:hover span:nth-child(3) {
			width: 100%;
			transform: translateX(-100%);
		}

		a span:nth-child(2) {
			top: 0;
			left: 0;
			width: 1px;
			height: 0;
			background: #fff;

		}

		a:hover span:nth-child(2) {
			height: 100%;
			transform: translateY(100%);
		}

		a span:nth-child(4) {
			bottom: 0;
			right: 0;
			width: 1px;
			height: 0;
			background: #fff;

		}

		a:hover span:nth-child(4) {
			height: 100%;
			transform: translateY(-100%);
		}

		.note {
			display: block;
			position: absolute;
			top: 60%;
			font-size: 1.2em;
			color: #fff;
			text-shadow: 0 5px 5px rgba(0,0,0,.2);
		    font-family: serif;
		}
	</style>
	<meta charset="UTF-8">
	<title>Back to Login Page</title>
</head>
<body>	
		<a href="https://city-service.uz/">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			Saytga kirish
		</a>
		<span class="note">Sessiya vaqti tugadi! Iltimos, qayta saytga kiring.</span>	
</body>
</html>