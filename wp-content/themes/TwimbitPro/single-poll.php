<?php
/*
     * The template for displaying all poll template
     *
     *
     * */

get_header();


?>

<style>
	.meeting {
		margin-top: 70px;
		margin-left:5px;
        margin-right: 5px;
		justify-content: center;
		overflow:hidden
	}
	.zoom
	{
		/*height:100%*/
	}
	h2,h3
	{
		color: #00485a;;
		margin:0.5em
	}
    .top-left-head{
        box-shadow: 1px 9px 15px -6px rgba(0, 0, 0, 0.5);
    }
    .bottom-right{
        margin-top:-1em;
        margin-left: 1em;
    }
</style>

<div class="row meeting">
	<!--Main div   -->
	<div class="lg-col-6 md-col-6 sm-col-6 xs-col-12" style="display: inline-table;">
		<!-- 1st div divided into 50%size of the page-->
		<div class="top-left-head">
			<h2>Shalini Bose</h2>
			<h3>Topic : Zoom meeting and slide testing</h3>

		</div>
		<div class="zoom">
			<div class="iframe-container" style="overflow: hidden; padding-top: 98%; position: relative; ">
				<iframe allow="microphone; camera"
				        style="border: 0;
	                    height: 100%;
	                    left: 0;
	                    position: absolute;
	                    top: 0;
	                    width: 100%;"
					    src="https://zoom.us/j"
                        scrolling="auto"
					    frameborder="0"

					    webkitallowfullscreen mozallowfullscreen allowfullscreen>
				</iframe>
			</div>
		</div>
	</div>

	<div class="lg-col-6 md-col-6 sm-col-6 xs-col-12" style="margin-top: -1em;">
		<!-- main div divded into 50% of the page -->

		<div class="slide" style="margin-top: -9em; overflow: hidden;">
			<iframe src="https://slides.com/amansharma-4/title-textonetwothree/live#/"
			        width="100%"
			        height="750"
			        frameborder="0"
                    scrolling="auto"
			        webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

			</iframe>
		</div>
        <div class="bottom-right">

            <h2>Attachments</h2>

        </div>
	</div>
</div>
