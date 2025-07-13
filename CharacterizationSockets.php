<?php
include("header.php");
?>
<article id="content">
	<h1>Characterization Socket</h1>
	<ol>
		<li><a href="#1">Socket examples</a></li>
		<li><a href="#2">BGA example</a></li>
		<li><a href="#3">Tab example</a></li>
		<li><a href="#4">Controlled impedance to lead of package / die pad</a></li>
		<li><a href="#5">Test results</a></li>
	</ol>
	<section id="1">
		<h2>Socket examples</h2>
		<h3>RF SOIC</h3>
		<p>Controlled Impedance RF SOIC package and lead coplanarity verification Load Boards.</p>
		<table border="0" cellpadding="0" cellspacing="0" align="center" valign="top">
			<tbody><tr>
				<td><img src="images/CharacterizationSockets/PI-Ceramic14LeadRFSOICTestSocket.jpg"></td>
				<td><img src="images/CharacterizationSockets/PI-Ceramic28LeadRFSOICTestSocket.jpg"></td>
			</tr>
			<tr>
				<td align="center">G-TEK Load Board with active components, <br>50 mil pitch, 14 lead RF SOIC</td>
				<td align="center">TEMM-10 Load Board with active components, <br>50 mil Pitch, 28 Lead RF SOIC</td>
			</tr>
		</tbody></table>
		<h3>Particle Interconnect PLCC universal test socket</h3>
		<p>Nesting multiple packages in one design.</p>
		<p>0.050" pitch, 20-84 lead with coplanar verification built-in.</p>
		<table border="0" cellpadding="0" cellspacing="0" align="center" valign="top">
			<tbody><tr>
				<td>
					<img src="images/CharacterizationSockets/PI-PLCC-20-84Lead50MilSocket.jpg">
				</td>
				<td>
					<img src="images/CharacterizationSockets/PI-PLCC-NestedSocket.jpg">
				</td>
			</tr>
		</tbody></table>
		<h3>Alternative Particle Interconnect lead frame with holddown</h3>
		<p>Removable single unit - proof of concept.</p>
		<table border="0" cellpadding="0" cellspacing="0" align="center" valign="top">
			<tbody><tr>
				<td><img src="images/CharacterizationSockets/PI-AlternativeLeadFrameHolddown196QFP.jpg"></td>
				<td><img src="images/CharacterizationSockets/PI-AlternativeLeadFrameHolddown256QFP.jpg"></td>
			</tr>
			<tr>
				<td align="center">0.025" pitch, 196 lead, ceramic QFP.</td>
				<td align="center">0.020" pitch, 256 lead, ceramic QFP.</td>
			</tr>
		</tbody></table>
	</section>
	<section id="2">
		<h2>BGA example</h2>
		<h3>Particle Interconnect - Sandia Lab Known Good Die (KGD)</h3>
		<p>Known-Good-Die probe/burn-in. Proof of removable die MCM-L/D/C.</p>
		<ul>
			<li>0.030" pitch 19x19 miniBGA.</li>
			<li>Burn-in at 125 &deg; C, 168 hours.</li>
			<li>0 failures, 100+ runs, no deformation.</li>
		</ul>
		<table border="0" cellpadding="5" cellspacing="0" align="center" valign="top">
			<tbody><tr>
				<td><img src="images/CharacterizationSockets/PI-Sandia-MiniBGA30milPitchDieCloseup.jpg"></td>
				<td><img src="images/CharacterizationSockets/PI-BGA30milPitchSocket.jpg"></td>
			</tr>
			<tr>
				<td align="center">0 failures, 11 runs shown above.</td>
				<td align="center">Particle Interconnect surface mount BGA socket.</td>
			</tr>
		</tbody></table>
		<table border="0" cellpadding="0" cellspacing="0" align="center" valign="top">
			<tbody><tr>
				<td><img src="images/CharacterizationSockets/PI-Sandia-InterposerSchematic1993.jpg"></td>
				<td><img src="images/CharacterizationSockets/PI-Sandia-30milPitchInterposer.jpg"></td>
			</tr>
			<tr>
				<td align="center">Particle Interconnect - Sandia mBGA interposer schematic.</td>
				<td align="center">Sandia mBGA interposer</td>
			</tr>
		</tbody></table>
		<h3>Particle Interconnect through-hole BGA socket</h3>
		<p>0.050" pitch, 15x15 version.</p>
		<p><img src="images/CharacterizationSockets/PI-BGA50milPitchSocket.jpg"></p>
		<h3>Particle Interconnect seasaw BGA socket</h3>
		<p>BeCu spring material with Particle Interconnect bumps on opposite sides of opposite ends of beam.</p>
		<p><img src="images/CharacterizationSockets/PI-BGASeasawSocket.jpg"></p>
	</section>
	<section id="3">
		<h2>Tab example</h2>
		<h3>Particle Interconnect - Hughes Aircraft 1988 joint venture</h3>
		<p>Burned-in at 125 &deg; C for 168 hours.</p>
		<table border="0" cellpadding="0" cellspacing="0" align="center" valign="top">
			<tbody><tr>
				<td><img src="images/CharacterizationSockets/PI-Hughes-LoadBoardAssembly%26TABFrame.jpg"></td>
				<td><img src="images/CharacterizationSockets/PI-Hughes-TABTestSocket.jpg"></td>
			</tr>
			<tr>
				<td align="center">15 mil pitch, 188 lead, JEDEC Standard TAB test socket with 50 MHz high level D.U.T. tester.</td>
				<td align="center">15 mil pitch, 188 lead, JEDEC Standard TAB test socket.</td>
			</tr>
		</tbody></table>
		<p><img src="images/CharacterizationSockets/Hughes-TABFrame.jpg" alt="" title="" style="float:right; margin:0px 0px 0px 5px;"></p>
		<p>0.015" pitch OLB (Outer Lead Bond) - 0.006" pitch ILB (Inner Lead Bond) TAB (Tape Automated Bonding) tested/burned-in/speed-sorted.</p>
		<ol>
			<li>Excise line for flip chip mounting of TAB frame into finished MCM.</li>
			<li>Particle Interconnect ILB contact point onto 129k gate array.</li>
		</ol>
	</section>
	<section id="4">
		<h2>Controlled impedance to lead of package / die pad</h2>
		<h3>Controlled impedance to lead of package</h3>
		<table border="0" cellpadding="0" cellspacing="0" align="center" valign="top">
			<tbody><tr>
				<td><img src="images/CharacterizationSockets/PLCC-Schematic.jpg"></td>
				<td><img src="images/CharacterizationSockets/PI-PLCC-Lead30000Insertions.jpg"></td>
			</tr>
			<tr>
				<td>Schematic for controlled impedance socket.</td>
				<td>
					Surface of PLCC J-Lead after 30,000 insertions.
					Surface finish of lead passed steam aging test.
				</td>
			</tr>
		</tbody></table>
		<h4>Controlled impedance socket</h4>
		<p>44 pin controlled impedance Particle Interconnect PLCC socket or interposer with singulate leads. Decoupling capacitors are within 0.100" of PLCC pad.</p>
		<table border="0" cellpadding="0" cellspacing="0" align="center" valign="top">
			<tbody><tr>
				<td><img src="images/CharacterizationSockets/PLCC-PCBLayout.jpg"></td>
				<td><img src="images/CharacterizationSockets/PLCC-MechanicalHolddown.jpg"></td>
			</tr>
			<tr>
				<td align="right">Printed circuit board layout</td>
				<td align="center">Mechanical hold down</td>
			</tr>
		</tbody></table>
		<h4>Circuit layout for controlled impedance socket</h4>
		<p>D.U.T. board layout use for TDR measurement. The traces are narrowed to compensate for Z<sub>0</sub> change due to devices present in the socket.</p>
		<table border="0" cellpadding="0" cellspacing="0" align="center" valign="top">
			<tbody><tr>
				<td><img src="images/CharacterizationSockets/PLCC-CircuitLayout.jpg"></td>
				<td><img src="images/CharacterizationSockets/PLCC-CircuitLayout2.jpg"></td>
			</tr>
		</tbody></table>
		<h4>TDR of controlled impedance Particle Interconnect socket (interposer) on load board</h4>
		<style type="text/css">
			table.smaller {font-size: smaller; font-style: normal}
		</style>
		<table class="smaller" border="0" cellpadding="0" cellspacing="0" align="center" valign="top">
			<tbody><tr>
				<td><img src="images/CharacterizationSockets/PLCC-TDR-PI-Contribution1.jpg"></td>
				<td><img src="images/CharacterizationSockets/PLCC-TDR-PI-Contribution2.jpg"></td>
			</tr>
			<tr>
				<td>
					<table border="0" cellpadding="2" cellspacing="0" align="center" valign="top">
						<tbody><tr>
							<td><b>Impedance</b></td>
							<td>=</td>
							<td><div style="color: green"><strong>41.5 &Omega;</strong></div></td>
						</tr>
						<tr>
							<td>&rho;</td>
							<td>=</td>
							<td>- 9.258 %</td>
						</tr>
						<tr>
							<td>Distance</td>
							<td>=</td>
							<td>90.47 mm</td>
						</tr>
						<tr>
							<td colspan="6">Cursor at 0.6036 ns from reference plane</td>
						</tr>
					</tbody></table>
				</td>
				<td>
					<table border="0" cellpadding="1" cellspacing="0" align="center" valign="top">
						<tbody><tr>
							<td><b>Impedance</b></td>
							<td>=</td>
							<td><div style="color: blue"><b><strong>57.2 &Omega;</strong></b></div></td>
						</tr>
						<tr>
							<td>&rho;</td>
							<td>=</td>
							<td>6.791 %</td>
						</tr>
						<tr>
							<td>Distance</td>
							<td>=</td>
							<td>100.9 mm</td>
						</tr>
						<tr>
							<td colspan="6">Cursor at 0.6736 ns from reference plane</td>
						</tr>
					</tbody></table>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<table border="0" cellpadding="2" cellspacing="0" align="center" valign="top">
						<tbody><tr>
							<td align="center">Reference plane = 23.7844 ns</td>
						</tr>
					</tbody></table>
					<table border="0" cellpadding="2" cellspacing="0" align="center" valign="top">
						<tbody><tr>
							<td>Channel 1</td>
							<td>=</td>
							<td>200.0 mV/div</td>
							<td>Offset</td>
							<td>=</td>
							<td>4.075 Volts</td>
							<td></td>
						</tr>
						<tr>
							<td>Timebase</td>
							<td>=</td>
							<td>0.1 ns/div</td>
							<td>Delay</td>
							<td>=</td>
							<td>24.1920 ns</td>
							<td>(Shown on graph)</td>
						</tr>
					</tbody></table>
					<table border="0" cellpadding="2" cellspacing="0" align="center" valign="top">
						<tbody><tr>
							<td>Start = 24.5432 ns,	Stop = 24.5474 ns, &Delta; T = 0.0042 ns</td>
						</tr>
					</tbody></table>
				</td>
			</tr>
		</tbody></table>
		<ul>
			<li>Cursor at contact point on diamond dust/diving board with no part in socket.</li>
			<li>Trigger is continuously running at 10.0 kHz with step on.</li>
		</ul>
		<ol>
			<li>Demonstrated controlled impedance connector from contactor board to mother board using Particle Interconnect with impedance tolerance of 50 &Omega; &plusmn; 1 &Omega;.</li>
			<li>Controlled impedance of J-lead going to package.</li>
			<li>Compensation (Point <font style="color: green;"><b>2</b></font> on graph) to neutralize internal inductance and capacitance of PLCC package (Point <font style="color: blue;"><b>3</b></font> on graph).</li>
			<li><font style="color: green;"><b>Particle Interconnect is 10 times better than SMA connector</b></font> (Point <font style="color: red;"><b>1</b></font> on graph).</li>
			<li><a href="MMSpapers.html#PI-MMS-TI-HP-Figure">Additional work by MMS, TI, and HP.</a></li>
		</ol>
	</section>
<section id="5"></a>
<h2>Test results</h2>
<h3>Lifetest comparison of Particle Interconnect vs. other sockets</h3>
<h4>Tested to failure.</h4>
<div class="d-flex justify-content-center align-items-center">
<img src="images/CharacterizationSockets/PI-ContactLife.jpg">
</div>
<p>This graph illustrates the exceptionally long remate life the Particle Interconnect coating provides a contact. Since the non-wiping action of the particles does very little damage to the mating surface, contacts last for 1,000,000 insertions or more. While this number is higher than the most applications require, it does testify to the robustness of connections using Particle Interconnect coatings.</p>
<h3>Particle Interconnect contact resistance vs. contact force</h3>
<img src="images/CharacterizationSockets/PI-ContactResistanceVSContactForce-1mmPitchBGAInterposer.jpg" alt="" title="" style="float:right; margin:0px 0px 0px 5px;">
<h4>Gold probe to top side Particle Interconnect</h4>
<p>Particle Interconnect's very low resistance results in higher current capacity.</p>
<ul>
	<li>1 mm pitch BGA interposer.</li>
	<li>9.2 grams contact force (.0902 N, .020 lbs, or .325 Oz.)</li>
	<li>Contact resistance = .00433 &Omega;</li>
</ul>
<table border="0" cellpadding="0" cellspacing="0" align="center" valign="top">
	<tbody><tr>
		<td><img src="images/CharacterizationSockets/PI-ArrayTopSide.jpg"></td>
		<td><img src="images/CharacterizationSockets/PI-BottomSide.jpg"></td>
	</tr>
	<tr>
		<td align="center">Particle Interconnect array top side</td>
		<td align="center">Particle Interconnect bottom side close up</td>
	</tr>
</tbody></table>
<h3>Contact resistance (milli-Ohm) vs. holddown force (gram-force)</h3>
<p>Courtesy of Amp</p>
<p>These graphs show how Particle Interconnect coated contacts compare to traditional scrubing contact surfaces as regard to contact force and resistance. They illustrate the exceptionally low contact force of Particle Interconnect, showing this force to be at the test limit of 10 grams.</p>
<p>More importantly, the graphs show how consistently Particle Interconnect coatings perform between remate cycles. While tin and gold plated contacts 40 to 100 gram range initially, this performance was inconsistent and tended to degrade between remates because of oxide growth.</p>
<p>0.25" diameter hemispherical probes vs. 63/37 tin-lead coated surface.</p>
<table border="0" cellpadding="0" cellspacing="0" align="center" valign="top">
	<tbody><tr>
		<td align="center"><b>Bright tin probe vs. control (no PI)</b></td>
		<td align="center"><b>Bright tin probe vs. 20-25 &micro; PI</b></td>
	</tr>
	<tr>
		<td align="center"><img src="images/CharacterizationSockets/ResistanceVsForce-BrightTinVsNonscrubSmoothSurface.jpg"></td>
		<td align="center"><img src="images/CharacterizationSockets/ResistanceVsForce-BrightTinVsPI.jpg"></td>
	</tr>
	<tr>
		<td style="vertical-align: top">
			. 0.010" BeCu, 0.250" Ni, 0.150" SnPb.<br>
			. 20 to 80,000+ milli-Ohms, 1 to 9 remates.<br>
			. No scrubbing action.
		</td>
		<td style="vertical-align: top">
			. 0.010" BeCu, 0.250" Ni + PI, 0.150" SnPb.<br>
			. 6 to 9 milli-Ohms (one ignored), 1 to 6 remates.<br>
			. No scrubbing action against PI.
		</td>
	</tr>
</tbody></table>
<table border="0" cellpadding="0" cellspacing="10" align="center" valign="top">
	<tbody><tr>
		<td align="center"><b>Gold Probe vs. Control (no PI)</b></td>
		<td align="center"><b>Gold probe vs. 20-25 &micro; PI</b></td>
	</tr>
	<tr>
		<td><img src="images/CharacterizationSockets/ResistanceVsForce-SoftGoldVsNonscrubSmoothSurface.jpg"></td>
		<td><img src="images/CharacterizationSockets/ResistanceVsForce-SoftGoldVsPI.jpg"></td>
	</tr>
	<tr>
		<td style="vertical-align: top">
			. 0.010" BeCu; 0.250" Ni; 0.150" SnPb.<br>
			. 20 to 80,000+ milli-Ohms, 1 to 9 remates.<br>
			. No scrubing action.
		</td>
		<td style="vertical-align: top">
			. 0.010" BeCu; 0.250" Ni + PI; 0.150" SnPb.<br>
			. 8 to 14 milli-Ohms, 1 to 8 remates.<br>
			. No scrubbing action against PI.
		</td>
	</tr>
</tbody></table>
</section>
</article>
</main>

</body></html>