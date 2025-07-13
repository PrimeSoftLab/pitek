<?php
include("header.php");
?>
<article id="content">
	<h1>Electrical Connector</h1>
	<ol>
		<li><a href="#1">Theory</a></li>
		<li><a href="#2">Flip chip</a></li>
		<li><a href="#3">BGA</a></li>
	</ol>
	<p>Various electrical connector configurations can be made using Particle Interconnect, a few are shown.</p>
	<section id="1">
		<h2>Theory</h2>
		<h3>Particle Interconnect via</h3>
		<p>Connecting two conducting surfaces together.</p>
		<table class="legacy-table">
			<tbody><tr>
				<td align="center"><b>Particle closeup<b></b></b></td>
				<td align="center"><b>Connector closeup<b></b></b></td>
			</tr>
			<tr>
				<td><img src="images/electrical/PI-Via1.jpg"></td>
				<td><img src="images/electrical/PI-Via2.jpg" style="margin-left: 12px;"></td>
			</tr>
		</tbody>
	</table>
	<h3>SEM's of contact surface</h3>
	<h4>Tin-Lead solder over Nickel coated particles.</h4>
	<p>22x magnification with 88x zoom view.</p>
	<p><img src="images/electrical/PI-SurfaceSEM.jpg"></p>
</section>

<section id="2">
	<h2>Flip chip</h2>
	<h3>Particle Interconnect - Hughes Aircraft 1988 - 1989</h3>
	<p>50,000 die joint production test venture.</p>
	<h4>Before burned-in:</h4>
	<ul>
		<li>No bump deformation.</li>
		<li>Die Sn/Pb 3/97, socket Au 100, load 1 gm/mil<sup>2</sup> pad to socket. Burned-in 125 ° C for 168 hours. Particles milled into gold ceramic ink and fired onto ceramic substrate. (Depression in center of bump is aluminum die pad covered by protective passivation layer.)</li>
	</ul>
	<table class="legacy-table">
		<tbody><tr>
			<td><img src="images/electrical/FlipChipPrePIAttachment-1.jpg"></td>
			<td><img src="images/electrical/FlipChipPrePIAttachment-2.jpg"></td>
		</tr>
		<tr>
			<td width="200">50x bumped chip before pressing against PI gold thick film.</td>
			<td width="200">500x bump before contacting PI.</td>
		</tr>
	</tbody>
</table>
<h4>After burned-in:</h4>
<ul>
	<li>No bump deformation.</li>
	<li>PI/gold bonded to tin/lead bump and was ripped off substrate. Resulting in using nickel as higher strength Particle Interconnect bond layer in future test socket/temporary contact usages and other metal combinations in permanent usages.</li>
</ul>
<table class="legacy-table">
	<tbody><tr>
		<td><img src="images/electrical/FlipChipPostPIAttachment-1.jpg"></td>
		<td><img src="images/electrical/FlipChipPostPIAttachment-2.jpg"></td>
	</tr>
	<tr>
		<td width="200">50x bumped chip after pressing against PI gold thick film metal matrix with 1 gm/mil<sup>2</sup> load.</td>
		<td width="200">500x bump after contacting PI, metal matrix is on bump.</td>
	</tr>
</tbody></table>
<h3>Particle Interconnect - Hughes environmental test die</h3>
<p>Particle Interconnect removable MCM die socket.</p>
<img src="images/electrical/Hughes-EnvironmentalTestDie.jpg" alt="" title="" style="float:right; margin:0px 0px 0px 5px;  width:100%; max-width:380px; height: auto;">
<p><font style="color: green;"><b>100% of 500 die lot survived 4x <a href="http://www.dscc.dla.mil/Programs/MilSpec/listdocs.asp?BasicDoc=MIL-STD-883">Mil-Std-883C</a>.</b></font></p>
<ol>
	<li>Particle Interconnect with both adhesive and mechanical hold-down of chips while accumulating 4 runs of:</li>
	<ul>
		<li>168 hours (672 hours total) 125 ° C for burn-in (other test passed are continuous 125 ° C),</li>
		<li>500 cycles (2,000 cycles total) -55 to +125 ° C fast ramp MIL-STD-883C shock test,</li>
		<li>24 hours (96 hours total) in salt/fog corrosion test,</li>
		<li>24 hours (96 hours total) HAST (Highly Accelerated Stress Testing) pressure chamber (30 psi, +125 ° C pressure pot),</li>
		<li><font style="color: green;"><b>Results in 50,000 die lot test prior to transfer into production.</b></font></li>
	</ul>
	<li>96/4 Pb/Sn reflowed plated bump to spherize with special passivation configuration.</li>
	<li>Die orientated same as CAD picture for clarity (see: <a href="MCM.html">Removable die MCM - L/D/C</a>).</li>
	<li>Note contact resistance test pads on left edge.</li>
	<li>Note traces for passivation crack detection.</li>
	<li>Note temperature sensors in center of die.</li>
	<li>Note traces for edge crack detection.</li>
	<li>Note traces for die heating.</li>
	<li>Note Particle Interconnect imprint.</li>
</ol>
</section>
<section id="3">
<h2>BGA</h2>
<h3>Particle Interconnect - Sandia Lab Known Good Die (KGD)</h3>
<p>Known-Good-Die probe/burn-in. Proof of removable die MCM-L/D/C.</p>
<ul>
	<li>0.030" pitch 19x19 miniBGA.</li>
	<li>Burn-in at 125 ° C, 168 hours.</li>
	<li>0 failures, 100+ runs, no deformation.</li>
</ul>
<table class="legacy-table">
	<tbody><tr>
		<td><img src="images/electrical/PI-Sandia-MiniBGA30milPitchDieCloseup.jpg"></td>
		<td><img src="images/electrical/PI-BGA30milPitchSocket.jpg" style="margin-left: 12px;"></td>
	</tr>
	<tr>
		<td align="center">0 failures, 11 runs shown above.</td>
		<td align="center">Particle Interconnect surface mount BGA socket.</td>
	</tr>
</tbody></table>
<table class="legacy-table">
	<tbody><tr>
		<td><img src="images/electrical/PI-Sandia-InterposerSchematic1993.jpg"></td>
		<td><img src="images/electrical/PI-Sandia-30milPitchInterposer.jpg"></td>
	</tr>
	<tr>
		<td align="center">Particle Interconnect - Sandia mBGA interposer schematic.</td>
		<td align="center">Sandia mBGA interposer</td>
	</tr>
</tbody>
</table>
</section>
</div>
</article>
</main>
</body>
</html>