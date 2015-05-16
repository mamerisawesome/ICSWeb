@extends('layouts.default')
@section('content')
	
	{{ HTML::style('css/curriculum.css'); }}
    {{ HTML::script('script/curriculum.js'); }}


	<div>
		<div class="wrapping-panel" id="curriculum-header-wrapper">
			<div class="container" id="curriculum-header">
				<h1>BS Computer Science Curriculum</h1>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. 	Integer vitae elementum nibh, vitae malesuada nulla. Donec id urna nunc. Aenean volutpat, ex eu congue lacinia, erat nulla scelerisque nisi, molestie vestibulum tortor metus quis lacus. Nam diam ipsum, accumsan eget iaculis a, fringilla quis ipsum. Vivamus odio orci, dictum nec condimentum sed, vehicula eu dolor.
				</p>
				<p>
					Integer vitae elementum nibh, vitae malesuada nulla. Donec id urna nunc. Aenean volutpat, ex eu congue lacinia, erat nulla scelerisque nisi, molestie vestibulum tortor metus quis lacus. Nam diam ipsum, accumsan eget iaculis a, fringilla quis ipsum. Vivamus odio orci, dictum nec condimentum sed, vehicula eu dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
				</p>
			</div>
		</div>
	</div>

	<div class="wrapping-panel" id="svg-curriculum">
		<div class="container">
			<div class="col-md-12">
				<div class="scrollable">
					<svg width="1130" height="500" preserveAspectRatio="xMinYMin meet" class="content">
						<defs>
							<!-- FILTERS GO HERE -->
							<filter id="cmsc">
						 	<feGaussianBlur stdDeviation="7" result="blur2" />
				        	<feSpecularLighting result="spec2" in="blur2" specularConstant="2" specularExponent="13" lighting-color="#cccccc">
				            	<feDistantLight azimuth="5" elevation="25" />
							</feSpecularLighting>
				        	<feComposite in="SourceGraphic" in2="spec2" operator="arithmetic" k1="0" k2="1" k3="1" k4="0" />
							<!-- ADDS LIGHT EFFECT 
								
								From https://css-tricks.com/look-svg-light-source-filters/
							
								-->

				            <feOffset in="SourceAlpha" dx="2" dy="3" result="offset2" />
				            <feGaussianBlur in="offset2" stdDeviation="1"  result="blur1"/>
				       		 <feMerge result="withshadow">
				                <feMergeNode in="blur1" />
				                <feMergeNode in="SourceGraphic" />
				             </feMerge>

				           	<feComposite in="withshadow" in2="spec2" operator="arithmetic" k1="0" k2="1" k3="1" k4="0" />
				           	<!-- ADDS SHADOW -->
							</filter>
						</defs>
						
						<!-- FIRST YEAR, FIRST SEM -->
						
						<circle cx="80" cy="210" r="30" style="fill:rgb(184,204,228); stroke:#000000; filter:url(#cmsc);"/>
						<text x="60" y="212" style="font-family:Tahoma; font-size:10px">MATH 17</text>
						
						<circle cx="50" cy="260" r="20" style="fill:rgb(184,204,228); stroke:#000000; filter:url(#cmsc);" />
						<text x="35" y="263" style="font-family:Tahoma; font-size:9px">GE(SSP)</text>
						<circle cx="90" cy="275" r="15" style="fill:rgb(184,204,228); stroke:#000000; filter:url(#cmsc);" />
						<text x="79" y="278" style="font-family:Tahoma; font-size:9px">ENG 1</text>
						<circle cx="30" cy="160" r="25" style="fill:rgb(184,204,228); stroke:#000000; filter:url(#cmsc);" />
						<text x="16" y="164" style="font-family:Tahoma; font-size:9px">GE(SSP)</text>
						<circle cx="40" cy="320" r="30" style="fill:rgb(184,204,228); stroke:#000000; filter:url(#cmsc);" />
						<text x="25" y="325" style="font-family:Tahoma; font-size:9px">GE(MST)</text>

						<line x1="90" y1="182" x2="100" y2="150" style="stroke:#000000;" />
						<line x1="120" y1="200" x2="110" y2="200" style="stroke:#000000;" />
						<line x1="107" y1="222" x2="165" y2="245" style="stroke:#000000;" />

						<!-- FIRST YEAR, SECOND SEM -->
						<circle cx="155" cy="195" r="35" style="fill:rgb(56,112,204); stroke:#000000; filter:url(#cmsc);" />
						<text x="138" y="198" style="font-family:Tahoma; font-size:9px">CMSC 11</text>
						<circle cx="110" cy="120" r="30" style="fill:rgb(56,112,204); stroke:#000000; filter:url(#cmsc);" />
						<text x="93" y="123" style="font-family:Tahoma; font-size:9px">CMSC 56</text>
						<circle cx="185" cy="255" r="22" style="fill:rgb(56,112,204); stroke:#000000; filter:url(#cmsc);" />
						<text x="167" y="257" style="font-family:Tahoma; font-size:9px">MATH 26</text>
						<circle cx="250" cy="260" r="30" style="fill:rgb(56,112,204); stroke:#000000; filter:url(#cmsc);" />
						<text x="235" y="263" style="font-family:Tahoma; font-size:9px">CMSC 2</text>
						<circle cx="220" cy="180" r="17.5" style="fill:rgb(56,112,204); stroke:#000000; filter:url(#cmsc);" />
						<text x="208" y="182" style="font-family:Tahoma; font-size:9px">ENG 2</text>
						<circle cx="160" cy="80" r="20" style="fill:rgb(56,112,204); stroke:#000000; filter:url(#cmsc);" />
						<text x="144" y="82" style="font-family:Tahoma; font-size:9px">GE(MST)</text>

						<line x1="140" y1="120" x2="257" y2="75" style="stroke:#000000;" />
						<line x1="180" y1="170" x2="254" y2="145" style="stroke:#000000;" />
						<line x1="200" y1="240" x2="265" y2="200" style="stroke:#000000;" />
						<line x1="90" y1="182" x2="205" y2="125" style="stroke:#000000;" />


						<!-- SECOND YEAR, FIRST SEM -->
						<circle cx="285" cy="55" r="35" style="fill:rgb(194,214,155	); stroke:#000000; filter:url(#cmsc);" />
						<text x="267" y="58" style="font-family:Tahoma; font-size:9px">CMSC 56</text>
						<circle cx="280" cy="130" r="30" style="fill:rgb(194,214,155); stroke:#000000; filter:url(#cmsc);" />
						<text x="263" y="133" style="font-family:Tahoma; font-size:9px">CMSC 21</text>
						<circle cx="225" cy="55" r="20" style="fill:rgb(194,214,155); stroke:#000000; filter:url(#cmsc);" />
						<text x="211" y="58" style="font-family:Tahoma; font-size:9px">GE(AH)</text>
						<circle cx="225" cy="120" r="20" style="fill:rgb(194,214,155); stroke:#000000; filter:url(#cmsc);" />
						<text x="210" y="123" style="font-family:Tahoma; font-size:9px">STAT 1</text>
						<circle cx="290" cy="195" r="25" style="fill:rgb(194,214,155); stroke:#000000; filter:url(#cmsc);" />
						<text x="273" y="199" style="font-family:Tahoma; font-size:9px">MATH 27</text>
						<circle cx="335" cy="100" r="25" style="fill:rgb(194,214,155); stroke:#000000; filter:url(#cmsc);" />
						<text x="319" y="103" style="font-family:Tahoma; font-size:9px">GE(MST)</text>
						
						<line x1="312" y1="32" x2="460" y2="40" style="stroke:#000000;" />
						<line x1="320" y1="50" x2="390" y2="70" style="stroke:#000000;" />
						<line x1="315" y1="195" x2="358" y2="195" style="stroke:#000000;" />
						<line x1="190" y1="210" x2="225" y2="215" style="stroke:#000000;" />
						<polyline points="225, 215 226, 213 228, 210 233, 205 240, 205 245, 205 248, 208 250, 210 251, 213 252, 215 252 220" 
								  style="fill: none; stroke:#000000;" />
						<line x1="252" y1="220" x2="375" y2="250" style="stroke:#000000;" />
						<line x1="310" y1="135" x2="375" y2="125" style="stroke:#000000;" />	

						<!-- SECOND YEAR, SECOND SEM-->
						<circle cx="425" cy="110" r="55" style="fill:rgb(118,146,60); stroke:#000000; filter:url(#cmsc);" />
						<text x="405" y="113" style="font-family:Tahoma; font-size:9px">CMSC 123</text>
						<circle cx="450" cy="232" r="30" style="fill:rgb(118,146,60); stroke:#000000; filter:url(#cmsc);" />
						<text x="432" y="235" style="font-family:Tahoma; font-size:9px">GE (MST)</text>
						<circle cx="380" cy="208" r="25" style="fill:rgb(118,146,60); stroke:#000000; filter:url(#cmsc);" />
						<text x="363" y="211" style="font-family:Tahoma; font-size:9px">MATH 28</text>
						<circle cx="395" cy="270" r="30" style="fill:rgb(118,146,60); stroke:#000000; filter:url(#cmsc);" />
						<text x="377" y="273" style="font-family:Tahoma; font-size:9px">CMSC 22</text>
						<circle cx="490" cy="170" r="20" style="fill:rgb(118,146,60); stroke:#000000; filter:url(#cmsc);" />
						<text x="472.5" y="173" style="font-family:Tahoma; font-size:9px">GE (SSP)</text>
						<circle cx="495" cy="45" r="35" style="fill:rgb(118,146,60); stroke:#000000; filter:url(#cmsc);" />
						<text x="475" y="48" style="font-family:Tahoma; font-size:9px">CMSC 130</text>

						<line x1="310" y1="140" x2="555" y2="235" style="stroke:#000000;" />	
						<line x1="425" y1="270" x2="478" y2="310" style="stroke:#000000;" />
						<line x1="272" y1="280" x2="478" y2="330" style="stroke:#000000;" />
						<line x1="480" y1="120" x2="590" y2="150" style="stroke:#000000;" />
						<line x1="480" y1="125" x2="535" y2="165" style="stroke:#000000;" />

						<!-- THIRD YEAR, FIRST SEM -->
						<circle cx="515" cy="320" r="40" style="fill:rgb(255, 133, 133); stroke:#000000; filter:url(#cmsc);" />
						<text x="495" y="323" style="font-family:Tahoma; font-size:9px">CMSC 100</text>
						<circle cx="550" cy="190" r="30" style="fill:rgb(255, 133, 133); stroke:#000000; filter:url(#cmsc);" />
						<text x="530" y="193" style="font-family:Tahoma; font-size:9px">CMSC 127</text>
						<circle cx="615" cy="170" r="32" style="fill:rgb(255, 133, 133); stroke:#000000; filter:url(#cmsc);" />
						<text x="595" y="173" style="font-family:Tahoma; font-size:9px">CMSC 124</text>
						<circle cx="575" cy="250" r="27" style="fill:rgb(255, 133, 133); stroke:#000000; filter:url(#cmsc);" />
						<text x="555" y="252" style="font-family:Tahoma; font-size:9px">CMSC 131</text>
						<circle cx="580" cy="308" r="20" style="fill:rgb(255, 133, 133); stroke:#000000; filter:url(#cmsc);" />
						<text x="565" y="311" style="font-family:Tahoma; font-size:9px">SPCM 1</text>
						<circle cx="635" cy="315" r="30" style="fill:rgb(255, 133, 133); stroke:#000000; filter:url(#cmsc);" />
						<text x="616" y="318" style="font-family:Tahoma; font-size:11px">Elective</text>

						<line x1="600" y1="240" x2="657" y2="250" style="stroke:#000000;" />
						<line x1="475" y1="90" x2="655" y2="55" style="stroke:#000000;" />
						<line x1="479" y1="100" x2="715" y2="105" style="stroke:#000000;" />
						<line x1="479" y1="100" x2="675" y2="145" style="stroke:#000000;" />

						<!-- THIRD YEAR, SECOND SEM -->
						<circle cx="755" cy="105" r="40" style="fill:rgb(242, 84, 84); stroke:#000000; filter:url(#cmsc);" />
						<text x="735" y="107" style="font-family:Tahoma; font-size:9px">CMSC 170</text>
						<circle cx="675" cy="35" r="30" style="fill:rgb(242, 84, 84); stroke:#000000; filter:url(#cmsc);" />
						<text x="655" y="37" style="font-family:Tahoma; font-size:9px">CMSC 128</text>
						<circle cx="700" cy="160" r="30" style="fill:rgb(242, 84, 84); stroke:#000000; filter:url(#cmsc);" />
						<text x="680" y="162" style="font-family:Tahoma; font-size:9px">CMSC 125</text>
						<circle cx="690" cy="250" r="33" style="fill:rgb(242, 84, 84); stroke:#000000; filter:url(#cmsc);" />
						<text x="670" y="253" style="font-family:Tahoma; font-size:9px">CMSC 132</text>
						<circle cx="745" cy="210" r="25" style="fill:rgb(242, 84, 84); stroke:#000000; filter:url(#cmsc);" />
						<text x="726" y="213" style="font-family:Tahoma; font-size:11px">Elective</text>
						<circle cx="755" cy="275" r="27" style="fill:rgb(242, 84, 84); stroke:#000000; filter:url(#cmsc);" />
						<text x="740" y="275" style="font-family:Tahoma; font-size:9px">ENG 10</text>
						<text x="738" y="283" style="font-family:Tahoma; font-size:8px">PR. ENG 2</text>

						<line x1="730" y1="165" x2="800" y2="195" style="stroke:#000000;" />
						<line x1="478" y1="95" x2="803" y2="55" style="stroke:#000000;" />

						<!-- FOURTH YEAR, FIRST SEM -->
						<circle cx="855" cy="135" r="45" style="fill:rgb(255, 255, 143); stroke:#000000; filter:url(#cmsc);" />
						<text x="835" y="133" style="font-family:Tahoma; font-size:9px">CMSC 160</text>
						<text x="823" y="144" style="font-family:Tahoma; font-size:8px">PR. CMSC 21 AND</text>
						<text x="840" y="151" style="font-family:Tahoma; font-size:8px">MATH 26</text>
						<circle cx="835" cy="40" r="35" style="fill:rgb(255, 255, 143); stroke:#000000; filter:url(#cmsc);" />
						<text x="815" y="42" style="font-family:Tahoma; font-size:9px">CMSC 141</text>
						<circle cx="825" cy="220" r="35" style="fill:rgb(255, 255, 143); stroke:#000000; filter:url(#cmsc);" />
						<text x="805" y="222" style="font-family:Tahoma; font-size:9px">CMSC 137</text>
						<circle cx="905" cy="210" r="30" style="fill:rgb(255, 255, 143); stroke:#000000; filter:url(#cmsc);" />
						<text x="887" y="212" style="font-family:Tahoma; font-size:9px">CMSC 190</text>
						<text x="893" y="220" style="font-family:Tahoma; font-size:9px">or 200</text>
						<circle cx="960" cy="160" r="25" style="fill:rgb(255, 255, 143); stroke:#000000; filter:url(#cmsc);" />
						<text x="940" y="163" style="font-family:Tahoma; font-size:11px">Elective</text>
						<circle cx="925" cy="110" r="20" style="fill:rgb(255, 255, 143); stroke:#000000; filter:url(#cmsc);" />
						<text x="908" y="113" style="font-family:Tahoma; font-size:9px">GE (SSP)</text>
						<circle cx="902" cy="55" r="25" style="fill:rgb(255, 255, 143); stroke:#000000; filter:url(#cmsc);" />
						<text x="882" y="58" style="font-family:Tahoma; font-size:9px">CMSC 199</text>

						<!-- FOURTH YEAR, SECOND SEM -->
						<circle cx="1015" cy="65" r="40" style="fill:rgb(255, 255, 90); stroke:#000000; filter:url(#cmsc);" />
						<text x="995" y="67" style="font-family:Tahoma; font-size:9px">CMSC 190</text>
						<text x="1001" y="75" style="font-family:Tahoma; font-size:9px">or 200</text>
						<circle cx="1085" cy="95" r="27" style="fill:rgb(255, 255, 90); stroke:#000000; filter:url(#cmsc);" />
						<text x="1068" y="98" style="font-family:Tahoma; font-size:9px">GE (MST)</text>
						<circle cx="1040" cy="140" r="30" style="fill:rgb(255, 255, 90); stroke:#000000; filter:url(#cmsc);" />
						<text x="1020" y="142" style="font-family:Tahoma; font-size:11px">Elective</text>
						<circle cx="1090" cy="180" r="25" style="fill:rgb(255, 255, 90); stroke:#000000; filter:url(#cmsc);" />
						<text x="1075" y="183" style="font-family:Tahoma; font-size:9px">GE (AH)</text>
						<circle cx="1070" cy="250" r="35" style="fill:rgb(255, 255, 90); stroke:#000000; filter:url(#cmsc);" />
						<text x="1060" y="253" style="font-family:Tahoma; font-size:9px">PI 10</text>
						<circle cx="1000" cy="320" r="45" style="fill:rgb(255, 255, 90); stroke:#000000; filter:url(#cmsc);" />
						<text x="978" y="318" style="font-family:Tahoma; font-size:9px">CMSC 142</text>
						<text x="974" y="330" style="font-family:Tahoma; font-size:8px">PR. CMSC 123</text>

						<!-- NSTP AND PE HERE -->

						<text x="40" y="480" style="font-weight: bold; fill: #1E1E2E; font-family:Arial; font-size:10px;"> * Furthermore, all students are required to take the following: </text>
						<ellipse cx="370" cy="475" rx="20" ry="15" style="fill:rgb(184,204,228); stroke:#000000; filter:url(#cmsc);" />
						<text x="363" y="478" style="font-family:Tahoma; font-size:9px">PE 1</text>
						
						<ellipse cx="415" cy="475" rx="20" ry="15" style="fill:rgb(56,112,204); stroke:#000000; filter:url(#cmsc);" />
						<text x="408" y="478" style="font-family:Tahoma; font-size:9px">PE 2</text>
						
						<ellipse cx="460" cy="475" rx="20" ry="15" style="fill:rgb(194,214,155); stroke:#000000; filter:url(#cmsc);" />
						<text x="453" y="478" style="font-family:Tahoma; font-size:9px">PE 2</text>
						
						<ellipse cx="505" cy="475" rx="20" ry="15" style="fill:rgb(118,146,60); stroke:#000000; filter:url(#cmsc);" />
						<text x="498" y="478" style="font-family:Tahoma; font-size:9px">PE 2</text>
						
						<ellipse cx="550" cy="475" rx="20" ry="15" style="fill:rgb(194,214,155); stroke:#000000; filter:url(#cmsc);" />
						<text x="538" y="478" style="font-family:Tahoma; font-size:9px">NSTP 1</text>
						
						<ellipse cx="595" cy="475" rx="20" ry="15" style="fill:rgb(118,146,60); stroke:#000000; filter:url(#cmsc);" />
						<text x="581" y="478" style="font-family:Tahoma; font-size:9px">NSTP 2</text>
						
						

						<!-- LEGEND -->
						<rect x="70" y="380" rx="5" ry="5" width="120" height="30" style="fill:rgb(100,150,228); opacity:0.9;" />;
						<rect x="70" y="415" rx="5" ry="5" width="58" height="30" style="fill:rgb(184,204,228); opacity:0.9;" />;
						<rect x="132" y="415" rx="5" ry="5" width="58" height="30" style="fill:rgb(56,112,204); opacity:0.9;" />;
						<text x="98" y="400" style="font-weight: bold; fill: #1E1E2E; font-family:Arial; font-size:17px;">YEAR 1</text>
						<text x="84" y="435" style="font-weight: bold; fill: #1E1E2E; font-family:Arial; font-size:17px">1ST</text>
						<text x="146" y="435" style="font-weight: bold; fill: #1E1E2E; font-family:Arial; font-size:17px">2ND</text>
						
						<rect x="300" y="380" rx="5" ry="5" width="120" height="30" style="fill:rgb(156,180,108); opacity:0.9;" />;
						<rect x="300" y="415" rx="5" ry="5" width="58" height="30" style="fill:rgb(194,214,155); opacity:0.9;" />;
						<rect x="362" y="415" rx="5" ry="5" width="58" height="30" style="fill:rgb(118,146,60); opacity:0.9;" />;
						<text x="328" y="400" style="font-weight: bold; fill: #1E1E2E; font-family:Arial; font-size:17px">YEAR 2</text>
						<text x="314" y="435" style="font-weight: bold; fill: #1E1E2E; font-family:Arial; font-size:17px">1ST</text>
						<text x="376" y="435" style="font-weight: bold; fill: #1E1E2E; font-family:Arial; font-size:17px">2ND</text>
					
						<rect x="600" y="380" rx="5" ry="5" width="120" height="30" style="fill:rgb(247, 105, 115); opacity:0.9;" />;
						<rect x="600" y="415" rx="5" ry="5" width="58" height="30" style="fill:rgb(255,133,133); opacity:0.9;" />;
						<rect x="662" y="415" rx="5" ry="5" width="58" height="30" style="fill:rgb(242,84,84); opacity:0.9;" />;
						<text x="628" y="400" style="font-weight: bold; fill: #1E1E2E; font-family:Arial; font-size:17px">YEAR 3</text>
						<text x="614" y="435" style="font-weight: bold; fill: #1E1E2E; font-family:Arial; font-size:17px">1ST</text>
						<text x="676" y="435" style="font-weight: bold; fill: #1E1E2E; font-family:Arial; font-size:17px">2ND</text>
					
						<rect x="900" y="380" rx="5" ry="5" width="120" height="30" style="fill:rgb(255,255,117); opacity:0.9;" />;
						<rect x="900" y="415" rx="5" ry="5" width="58" height="30" style="fill:rgb(255,255,143); opacity:0.9;" />;
						<rect x="962" y="415" rx="5" ry="5" width="58" height="30" style="fill:rgb(255,255,90); opacity:0.9;" />;
						<text x="928" y="400" style="font-weight: bold; fill: #1E1E2E; font-family:Arial; font-size:17px">YEAR 4</text>
						<text x="914" y="435" style="font-weight: bold; fill: #1E1E2E; font-family:Arial; font-size:17px">1ST</text>
						<text x="976" y="435" style="font-weight: bold; fill: #1E1E2E; font-family:Arial; font-size:17px">2ND</text>
					
					</svg>
				</div>
			</div>
		</div>
	</div>

	<div>
		<div class="wrapping-panel" id="courses-body"> 
		
			<div class="container">
				<div class="col-md-12">
					<h1>Courses Offered</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
					<br />

					<div class="col-md-12" id="curriculum-container">
					
					</div>
				</div>

			</div>

		</div>

@stop
