<?php
include("header.php");
?>

			<article id="content">
				<h1>Emulation Socket</h1>

				<ol>
					<li><a href="#1">Theory</a></li>
					<li><a href="#2">Field replacable socket</a></li>
					<li><a href="#3">Successful emulation project</a></li>
				</ol>

				<section id="1">
				<h2>Theory</h2>

				<h3>Testing bumped chip on Particle Interconnect leadframe</h3>
				<p><img src="images/EmulationSockets/PI-InCircuitProberCrossSection.jpg"></p>
</section>
				<section id="2">
				<h2>Field replacable socket</h2>

				<h3>Alternative Particle Interconnect lead frame with holddown</h3>
				<p>Removable single unit - proof of concept.</p>
				<table border="0" cellpadding="0" cellspacing="0" align="center" valign="top">
					<tbody><tr>
						<td><img src="images/EmulationSockets/PI-AlternativeLeadFrameHolddown196QFP.jpg"></td>
						<td><img src="images/EmulationSockets/PI-AlternativeLeadFrameHolddown256QFP.jpg"></td>
					</tr>
					<tr>
						<td align="center">0.025" pitch, 196 lead, ceramic QFP.</td>
						<td align="center">0.020" pitch, 256 lead, ceramic QFP.</td>
					</tr>
				</tbody></table>

				<h3>Field replacable socket vs. nonfield replacable packages</h3>
				<table border="0" cellpadding="0" cellspacing="10" align="center" valign="top">
					<tbody><tr>
						<td><img src="images/EmulationSockets/PI-FieldReplacableSocketVsNonFieldReplacablePackages.jpg"></td>
						<td><img src="images/EmulationSockets/PI-FieldReplacableSocketDiagram.jpg"></td>
					</tr>
					<tr>
						<td align="center"></td>
						<td align="center">Field replacable socket diagram.</td>
					</tr>
				</tbody></table>

				<h3>Field replacable socket</h3>
				<table border="0" cellpadding="0" cellspacing="10" align="center" valign="top">
					<tbody><tr>
						<td><img src="images/EmulationSockets/PI-FieldReplacableSocket-ConceptualDrawing.jpg"></td>
						<td><img src="images/EmulationSockets/PI-FieldReplacableSocketContactResistance.jpg"></td>
					</tr>
					<tr>
						<td align="center">Conceptual drawing</td>
						<td align="center"></td>
					</tr>
				</tbody></table>

				<h3>Field replacable socket contact resistance</h3>
				<h4>Contact resistance vs current capacity</h4>
				<p>0.020" pitch connection. Accuracy:</p>
				<ul>
					<li>Current source: &plusmn; 0.1 milli-A, 5 digit resolution.</li>
					<li>Digital voltmeter: &plusmn; microV, 6 digit resolution.</li>
				</ul>
				<table class="table-bordered" border="1" cellpadding="5" cellspacing="0" align="center" valign="top">
					<tbody><tr>
						<td bgcolor="#cccccc"><b>Forcing current<br>Amps</b></td>
						<td bgcolor="#cccccc"><b>Sense voltage<br>milli-volts</b></td>
						<td bgcolor="#cccccc"><b>Resistance<br>(R = V / I)<br>milli-ohms</b></td>
					</tr>
					<tr>
						<td>0.0001</td>
						<td>too small to read</td>
						<td>-</td>
					</tr>
					<tr>
						<td>0.0010</td>
						<td>too small to read</td>
						<td>-</td>
					</tr>
					<tr>
						<td>0.0100</td>
						<td>0.0113</td>
						<td>1.13</td>
					</tr>
					<tr>
						<td>0.1000</td>
						<td>0.1243</td>
						<td>1.24</td>
					</tr>
					<tr>
						<td>0.2000</td>
						<td>0.2480</td>
						<td>1.24</td>
					</tr>
					<tr>
						<td>0.3000</td>
						<td>0.3751</td>
						<td>1.25</td>
					</tr>
					<tr>
						<td>0.4000</td>
						<td>0.5011</td>
						<td>1.25</td>
					</tr>
					<tr>
						<td>0.5000</td>
						<td>0.6351</td>
						<td>1.27</td>
					</tr>
					<tr>
						<td>0.6000</td>
						<td>0.7660</td>
						<td>1.27</td>
					</tr>
					<tr>
						<td>0.7000</td>
						<td>0.9042</td>
						<td>1.29</td>
					</tr>
					<tr>
						<td>0.8000</td>
						<td>1.0240</td>
						<td>1.28</td>
					</tr>
					<tr>
						<td>0.9000</td>
						<td>1.1631</td>
						<td>1.29</td>
					</tr>
					<tr>
						<td>1.0000</td>
						<td>1.2796</td>
						<td>1.28</td>
					</tr>
					<tr>
						<td>1.5000</td>
						<td>1.8978</td>
						<td>1.26</td>
					</tr>
					<tr>
						<td>2.0000</td>
						<td>2.5438</td>
						<td>1.27</td>
					</tr>
				</tbody></table>

				<h3>Particle Interconnect Package (PIP)</h3>
				<p>Advanced low-cost minimal IC package.</p>
				<table border="0" cellpadding="5" cellspacing="0" align="center" valign="top">
					<tbody><tr>
						<td><img src="images/EmulationSockets/PI-LeadFrame12milPitch.jpg"></td>
						<td><img src="images/EmulationSockets/PI-LeadFrameChipSocket.jpg"></td>
					</tr>
					<tr>
						<td>QFP 132 lead, 0.012" pitch OLB (Outer Lead Bond).</td>
						<td>Leadframe / Chip-On-Board socket & carrier.</td>
					</tr>
				</tbody></table>
				<table border="0" cellpadding="5" cellspacing="0" align="center" valign="top">
					<tbody><tr>
						<td>
							<ul>
								<li>0.001"-0.005" flex/rigid board with flip chip attached topside (heat up/electrical down) {3 &micro; line & space on 3 &micro; flex obtainable at special labs}</li>
								<li>Board acts as probe card/burn-in socket/final package, <font style="color: green;"><b>only bad die are thrown away at assembly.</b></font></li>
								<li>Leads completely supported yet flexible and damage resistant.</li>
								<li>Outer Lead Bond (OLB) attachment by conventional heated solder reflow method or non-heated Particle Interconnect methods.</li>
								<li>Automatic or manual placement even with finest pitches.</li>
								<li>Controlled impedance routing from OLB to die pad in either single or multi-layer PCB.</li>
								<li>Lower cost than etched/stamped leadframes or conventional flip chip techniques.</li>
							</ul>
						</td>
						<td><img src="images/EmulationSockets/CSP.jpg"></td>
					</tr>
				</tbody></table>
</section>
				<section id="3">
				<h2>Successful emulation project</h2>
				<p>BGA package soldered to BGA socket and pinned on the outside edge for <a href="http://www.connectech.com/">CTI (Connector Technology Inc.)</a> in 1992.</p>

				<h3>Particle Interconnect through-hole BGA socket</h3>
				<p>0.050" pitch, 15x15 version.</p>
				<p><img src="images/EmulationSockets/PI-BGA50milPitchSocket.jpg"></p>
				</section>
			</article>

		</main>
	

</body>
</html>