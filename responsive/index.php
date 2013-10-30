<!DOCTYPE HTML PUBLIC 
  "-//W3C//DTD HTML 4.01 Transitional//EN"
  "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML>
<!--
Responsive design for MMCR website circa October, 2013
Code available on Github as user "mmcrproject"
-->

<HEAD>
<TITLE>MMCR</TITLE>

<!--Using Google Fonts, per-page CSS, and locally-hosted jQuery-->
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
<link rel="stylesheet" href="./css/fonts.css" type="text/css">
<link rel="stylesheet" href="./css/masterStyles.css" type="text/css">
<link rel="stylesheet" href="./css/index.css" type="text/css">
<script type="text/javascript" src="./scripts/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="./scripts/index.js"></script>
</HEAD>

<BODY>

<!--Horizontal header bar, full bar on desktop, -->
<div id="nav-header" class="offwhitebg">
	<img id="logo" src="./img/logo.png"/> <!--Logo is shown/hidden depending on resolution-->
	<img id="logo-mobile" src="./img/logo-mobile.png"/>
	<div id="navbar">
		
		<!--On desktop, colored nav boxes between nav bar and leading image-->
		<div id="navbarLinks">
			<!--Anchor buttons to content area of page-->
			<span class="black redbg">Adopt</span>
			<span class="black bluebg">Donate</span>
			<span class="black brownbg">Volunteer</span>
			<a href="./learn.php"><span class="black greenbg">Learn</span></a>
		</div>
	</div>
	
	<!--Mobile gets a dropdown instead of nav links-->
	<div id="navbarMobile">
		<span class="arrow-down"></span><span class="brown">Menu</span>
	</div>
	<div class="clear"> </div>
</div> <!--/header -->

<div id="headerImage"> <!--Large leading image-->
	<span class="header">Live Love Learn</span> <!--Tagline-->
</div>

<!--Mission statement-->
<span id="siteDescription" class="bold">Mid-Michigan Cat Rescue is dedicated to promoting the health and happiness of our cats and the humans who adopt them.</span>

<!--Clear floats to assure next line-->
<div class="clear"></div>

<!--
Colored boxes change appearance on hover, and allow navigation
of content through jQuery hidden divs
-->
<a  name="contentSelector" />
<div id="contentSelectorDiv">
	
	<a  href="#contentSelector">
	<div id="adoptSelector" class="contentSelector bold extraPadding">
		<span>Adopt</span>
	</div>
	</a>
	
	<a  href="#contentSelector">
	<div id="donateSelector" class="contentSelector bold extraPadding">
		<span>Donate</span>
	</div>
	</a>
	
	<a  href="#contentSelector">
	<div id="volunteerSelector" class="contentSelector bold extraPadding">
		<span>Volunteer</span>
	</div>
	</a>
	
	<a  href="#contentSelector">
	<div id="howyoucanhelpSelector" class="contentSelector bold">
		<span>How You Can Help</span>
	</div>
	</a>
	
	<a  href="#contentSelector">
	<div id="whatwedoSelector" class="contentSelector bold">
		<span>What We Do</span>
	</div>
	</a>
	
	<a  href="#contentSelector">
	<div id="whoweareSelector" class="contentSelector bold">
		<span>Who We Are</span>
	</div>
	</a>
</div>
	
<div class="clear"></div>

<!--
Adoption div, selected by default, hidden if not selected
-->
<div id="contentSelectorAdoptContent" class="content contentSelectorContent hidden">
	<div class="contentThreeColumn adopt">

		<div class="contentItem contentItemThreeColumn">
			<div class="contentHeadline ThreeColumnLeft">
				<span>Events Calendar</span>
			
			</div>
			<div class="contentStory ThreeColumnLeft">
				<img src="./img/wordpress.png" class="contentLeftImage"></img>
				<span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</span>
			</div>
		</div>

		<div class="contentItem contentItemThreeColumn">
			<div class="contentHeadline ThreeColumnMiddle">
				<span>Black Cat Special</span>
				
			</div>
			<div class="contentStory ThreeColumnMiddle">
				<img src="./img/twitter.png" class="contentRightImage"></img>
				<span>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.</span>
			</div>
		</div>

		<div class="contentItem contentItemThreeColumn">
			<div class="contentHeadline ThreeColumnRight">
				<span>Adopting is so easy</span>
				
			</div>
			<div class="contentStory ThreeColumnRight">
				<img src="./img/twitter.png" class="contentLeftImage"></img>
				<img src="./img/wordpress.png" class="contentRightImage"></img>
				<span>And here are some forms to do it with. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</span>
			</div>
		</div>
		
	</div>
	
	<div class="clear"></div>

	<div class="content contentTwoColumn">

	<div class="contentItem contentItemTwoColumn">
		<div class="contentHeadline TwoColumnLeft">
			<span>Random Cat</span>
		
		</div>
		<div class="contentStory TwoColumnLeft">
		<img src="./img/twitter.png" class="contentLeftImage"></img>
		<img src="./img/wordpress.png" class="contentRightImage"></img>
		<span>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</span>
		</div>
	</div>

	<div class="contentItem contentItemTwoColumn">
		<div class="contentHeadline TwoColumnRight">
			<span>FAQs</span>
			
		</div>
		<div class="contentStory ThreeColumnRight">
			<img src="./img/wordpress.png" class="contentLeftImage"></img>
			<span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</span>
		</div>
	</div>
</div> <!--/adopt-->
</div>

<!--
Donate div
-->
<div id="contentSelectorDonateContent" class="content contentSelectorContent hidden">
	<div class="content contentThreeColumn adopt">

		<div class="contentItem contentItemThreeColumn">
			<div class="contentHeadline ThreeColumnLeft">
				<span>Donate Headline One</span>
			
			</div>
			<div class="contentStory ThreeColumnLeft">
				<img src="./img/wordpress.png" class="contentLeftImage"></img>
				<span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</span>
			</div>
		</div>

		<div class="contentItem contentItemThreeColumn">
			<div class="contentHeadline ThreeColumnMiddle">
				<span>Donate Headline Two Special Stuff</span>
				
			</div>
			<div class="contentStory ThreeColumnMiddle">
				<img src="./img/twitter.png" class="contentRightImage"></img>
				<span>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.</span>
			</div>
		</div>

		<div class="contentItem contentItemThreeColumn">
			<div class="contentHeadline ThreeColumnRight">
				<span>This is Headline Three</span>
				
			</div>
			<div class="contentStory ThreeColumnRight">
				<img src="./img/twitter.png" class="contentLeftImage"></img>
				<img src="./img/wordpress.png" class="contentRightImage"></img>
				<span>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</span>
			</div>
		</div>
		
	</div>
</div> <!--/donate-->
	
<!--
Volunteer
-->	
<div id="contentSelectorVolunteerContent" class="content contentSelectorContent hidden">
	<div class="contentThreeColumn adopt">

		<div class="contentItem contentItemThreeColumn">
			<div class="contentHeadline ThreeColumnLeft">
				<span>Volunteer</span>
			
			</div>
			<div class="contentStory ThreeColumnLeft">
				<img src="./img/wordpress.png" class="contentLeftImage"></img>
				<span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</span>
			</div>
		</div>

		<div class="contentItem contentItemThreeColumn">
			<div class="contentHeadline ThreeColumnMiddle">
				<span>Black Cat Special</span>
				
			</div>
			<div class="contentStory ThreeColumnMiddle">
				<img src="./img/twitter.png" class="contentRightImage"></img>
				<span>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.</span>
			</div>
		</div>

		<div class="contentItem contentItemThreeColumn">
			<div class="contentHeadline ThreeColumnRight">
				<span>Adopting is so easy</span>
				
			</div>
			<div class="contentStory ThreeColumnRight">
				<img src="./img/twitter.png" class="contentLeftImage"></img>
				<img src="./img/wordpress.png" class="contentRightImage"></img>
				<span>And here are some forms to do it with. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</span>
			</div>
		</div>
		
	</div>
</div>

<!--
How You Can Help
-->	
<div id="contentSelectorHowYouCanHelpContent" class="content contentSelectorContent hidden">
	<div class="contentThreeColumn adopt">

		<div class="contentItem contentItemThreeColumn">
			<div class="contentHeadline ThreeColumnLeft">
				<span>How You Can Help</span>
			
			</div>
			<div class="contentStory ThreeColumnLeft">
				<img src="./img/wordpress.png" class="contentLeftImage"></img>
				<span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</span>
			</div>
		</div>

		<div class="contentItem contentItemThreeColumn">
			<div class="contentHeadline ThreeColumnMiddle">
				<span>Black Cat Special</span>
				
			</div>
			<div class="contentStory ThreeColumnMiddle">
				<img src="./img/twitter.png" class="contentRightImage"></img>
				<span>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.</span>
			</div>
		</div>

		<div class="contentItem contentItemThreeColumn">
			<div class="contentHeadline ThreeColumnRight">
				<span>Adopting is so easy</span>
				
			</div>
			<div class="contentStory ThreeColumnRight">
				<img src="./img/twitter.png" class="contentLeftImage"></img>
				<img src="./img/wordpress.png" class="contentRightImage"></img>
				<span>And here are some forms to do it with. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</span>
			</div>
		</div>
		
	</div>
</div>

<!--
What We Do
-->	
<div id="contentSelectorWhatWeDoContent" class="content contentSelectorContent hidden">
<div class="contentThreeColumn adopt">

		<div class="contentItem contentItemThreeColumn">
			<div class="contentHeadline ThreeColumnLeft">
				<span>What We Do</span>
			
			</div>
			<div class="contentStory ThreeColumnLeft">
				<img src="./img/wordpress.png" class="contentLeftImage"></img>
				<span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</span>
			</div>
		</div>

		<div class="contentItem contentItemThreeColumn">
			<div class="contentHeadline ThreeColumnMiddle">
				<span>Black Cat Special</span>
				
			</div>
			<div class="contentStory ThreeColumnMiddle">
				<img src="./img/twitter.png" class="contentRightImage"></img>
				<span>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.</span>
			</div>
		</div>

		<div class="contentItem contentItemThreeColumn">
			<div class="contentHeadline ThreeColumnRight">
				<span>Adopting is so easy</span>
				
			</div>
			<div class="contentStory ThreeColumnRight">
				<img src="./img/twitter.png" class="contentLeftImage"></img>
				<img src="./img/wordpress.png" class="contentRightImage"></img>
				<span>And here are some forms to do it with. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</span>
			</div>
		</div>
		
	</div>
</div>

<!--
Who We Are
-->	
<div id="contentSelectorWhoWeAreContent" class="content contentSelectorContent hidden">
<div class="contentThreeColumn adopt">

		<div class="contentItem contentItemThreeColumn">
			<div class="contentHeadline ThreeColumnLeft">
				<span>Who We Are</span>
			
			</div>
			<div class="contentStory ThreeColumnLeft">
				<img src="./img/wordpress.png" class="contentLeftImage"></img>
				<span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</span>
			</div>
		</div>

		<div class="contentItem contentItemThreeColumn">
			<div class="contentHeadline ThreeColumnMiddle">
				<span>Black Cat Special</span>
				
			</div>
			<div class="contentStory ThreeColumnMiddle">
				<img src="./img/twitter.png" class="contentRightImage"></img>
				<span>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.</span>
			</div>
		</div>

		<div class="contentItem contentItemThreeColumn">
			<div class="contentHeadline ThreeColumnRight">
				<span>Adopting is so easy</span>
				
			</div>
			<div class="contentStory ThreeColumnRight">
				<img src="./img/twitter.png" class="contentLeftImage"></img>
				<img src="./img/wordpress.png" class="contentRightImage"></img>
				<span>And here are some forms to do it with. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</span>
			</div>
		</div>
		
	</div>
</div>

<div class="clear"></div>

<div id="footer" class="offwhitebg">

	<div id="sitemap">
		<div class="sitemapColumn">
			<div>column1</div>
			<div><a href="#">Item 1</a></div>
			<div><a href="#">Item 2</a></div>
			<div><a href="#">Item 3</a></div>
		</div>
		<div class="sitemapColumn">
			<div>column2</div>
			<div><a href="#">Item 1</a></div>
			<div><a href="#">Item 2</a></div>
			<div><a href="#">Item 3</a></div>
		</div>
		<div class="sitemapColumn">
			<div>column3</div>
			<div><a href="#">Item 1</a></div>
			<div><a href="#">Item 2</a></div>
			<div><a href="#">Item 3</a></div>
		</div>
	</div>

	<div id="contactform">
	<form>
		<div>Sign up for our Newsletter</div>
		<input type="text" value="First Name"/>
		<input type="text" value="Last Name"/>
		<input type="text" value="Email Address"/>
		<input type="text" value="ZIP Code"/>
		<input type="button" value="Sign Up"/>
	</form>
	</div>
	<div class="clear"></div>
	<div id="contactBlurb">
		<div>Mid-Michigan Cat Rescue, inc.</div>
		<div>1117 Tulip St. Grand Ledge, MI 48837</div>
		<div>info@midmichgiancatrescue.org</div>
		<div class="clear"></div>
	</div>
<div class="clear"></div>

</div>

</BODY>
</HTML>