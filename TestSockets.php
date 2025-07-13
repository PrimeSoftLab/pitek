<?php
include("header.php");
?>

			<article id="content">
				<h1>Test Socket</h1>

				<table border="0" cellpadding="0" cellspacing="0" align="center" valign="top">
					<tbody><tr valign="top">
						<td width="50%">
							1. <a href="#1">Particle Interconnect advantage</a>
							<br>&bull;<a href="#1-1">PI interposer vs. solder ball</a>
							<br>&bull;<a href="#1-2">Test boards</a>
							<br>&bull; <a href="#1-3">Speed testing and binning for ICs</a>
							<br>&bull;<a href="#1-4">PI vs. pogo pin S11 parameters</a>
							<br>&bull;<a href="#1-5">Lifetest of PI vs. other sockets</a>
							<br>&bull;<a href="#1-6">10 Gb/s PAM4 eye diagram</a>
							<br>&bull;<a href="#1-7">PI contact resistance vs. force</a>
						</td>
						<td>
							&bull;<a href="#1-8">Reducing guard band</a>
							<br>2. <a href="#2">PLCC examples</a>
							<br>3. <a href="#3">BGA examples</a>
							<br>4. <a href="#4">Tab examples</a>
							<br>5. <a href="#5">Test fixture</a>
							<br>6. <a href="#6">Controlled impedance to lead of package / die pad</a>
							<br>7. <a href="TDR.php">TDR, S parameter, Eye diagram</a>
							<br>8. <a href="PI-SEM.php">SEM pictures of PI</a>
						</td>
					</tr>
				</tbody></table>

				<section id="1">
				<h2>Particle Interconnect advantage</h2>
</section>
				<section id="1-1">
				<h3>Diamond Particle Interconnect interposer vs. solder ball</h3>
				<div class="d-flex justify-content-center align-items-center">
				<img src="images/TestSockets/TDR.jpg">
			</div>
				<p>TDR data illustrates zero reactance and consistency of Diamond Particle Interconnect socket compared to soldered connection and SMA connector.</p>

				<h3>Particle Interconnect advantages</h3>
				<table class="table-bordered" border="1" cellpadding="5" cellspacing="0" align="center" valign="top">
					<tbody><tr align="center">
						<td>
							<b>Industry problem</b>
						</td>
						<td>
							<b>Particle Interconnect solution</b>
						</td>
					</tr>
					<tr valign="top">
						<td>
							Traditional sockets are made up of springs or pogo pins to achieve compliance. However, at Gigabit speeds they create a large impedance discontinuity at the solder ball due to skin effect loss and impedance mismatch, degrading the system interconnect return loss. Therefore, a device can fail a functional test in a traditional socket even though it can pass the test when soldered to a board.
						</td>
						<td>
							Particle Interconnect is presently used in the electronics testing industry for creating very high frequency sockets. The Particle Interconnect socket has exceptional long life (+1,500,000 remates) and very high reliability. Particle Interconnect creates a non-wiping remateable electrical interconnect on any electrical surface with the application of low mechanical force. This property allows a Particle Interconnect coated printed circuit board to be transformed into a remateable socket.
						</td>
					</tr>
					<tr valign="top">
						<td>
							Pogo pin's large travel does not detect miss-sized balls on BGA packages. This result in package failure when soldered to PCB.
						</td>
						<td>
							Particle Interconnect design allows one to tailor socket compliance to detect mis-sized BGA balls without signal speed reduction.
						</td>
					</tr>
					<tr valign="top">
						<td>
							Currently BGA balls are replaced individually (www.finetechusa.com).
						</td>
						<td>
							PI's solution is a single 2" stroke across 600 grit sand paper to planarize the balls by reducing the solder volume and then reshaping the solder balls by reflowing.
						</td>
					</tr>
					<tr valign="top">
						<td>
							Industry data indicates that a considerable number of good devices are rejected and/or damaged by the repeated re-mating in conventional spring based sockets which need wiping action to make a good electrical contact.
						</td>
						<td>
							The Particle Interconnect based socket use has improved overall yields in this type of application, by eliminating miss-contacts and lead damage to the device under test.
						</td>
					</tr>
					<tr valign="top">
						<td>
							Companies developing and supplying high frequency integrated circuits face difficult challenges in attempting to characterize and emulate the packaged devices.
						</td>
						<td>
							This problem can be solved by eliminating the test socket which normally sits on top of the DUT board and incorporating Particle Interconnect directly into the DUT board or by inserting a low profile Particle Interconnect based interposer between the device and the DUT board.
						</td>
					</tr>
					<tr valign="top">
						<td>
							A problem in high frequency testing and interconnects is the impedance mismatch between the device and related circuitry. This mismatch is typically caused by the use of conventional interconnect technologies with their long, uncontrolled impedance environment. Due to physical characteristics, conventional interconnects force long trace lengths between devices and related circuitry. All of these factors contribute to increased resistance (R), capacitance (C), and inductance (L).
						</td>
						<td>
							The Particle Interconnect joint is a pressure only connection which requires no sliding or wiping action. The connection is a matched impedance connection, with no impedance mismatch, so there is no reflected energy, thereby reducing the amplitude of the reflected signal allowing for faster signal transmission with greater signal fidelity.
						</td>
					</tr>
					<tr valign="top">
						<td>
							The wiping action required by conventional interconnect technology destroys and scars the metal surface that is being wiped. The wiping surface accumulates the wiped-off debris, and its non-conductive materials. With time, this accumulated debris prevents any electrical connection from being formed.
						</td>
						<td>
							The absence of wiping action and the low force required to make connection combine to simplify the requirements of the mechanical hold-down.
						</td>
					</tr>
					<tr valign="top">
						<td>
							Conventional contacts require 100 grams of contact force. At 100 grams per contact, the force level for a 227 point land grid array (LGA) package socket would be approximately 50 pounds. High compressive force of conventional connections require the inclusion of a backing plate to stiffen the receiving surface.
						</td>
						<td>
							The Particle Interconnect equivalent 227 point LGA socket requires only 0.9 pound. Therefore, one can use adhesives, vacuum, and/or air pressure, besides low pressure springs and dips for providing hold-down forces.
						</td>
					</tr>
				</tbody></table>
</section>
				<section id="1-2">
				<h3>Test boards</h3>
				<table border="0" cellpadding="5" cellspacing="0" align="center" valign="top">
					<tbody><tr valign="top">
						<td>
							<img src="images/TestSockets/DUT-1.jpg">
							<br>
							Normally a standard bent-wire socket is used as contactor for automatic test equipment (ATE). The normal bent-wire contactor is limited to accept only one style package per contactor design. A high cost is incurred if many different pin count package/contactors must be stocked. Since handlers are longlife only a few contactors are required which results in a high cost per contactor due to tooling cost.
						</td>
						<td>
							<img src="images/TestSockets/DUT-2.jpg">
							<br>
							A Particle Interconnect contactor consists of Particle Interconnect coated PCB or metal frame. This allows for flexibility in designing contactors with the shortest lead length possible. Also, multiple package styles can be nested in one design. The result is a significant cost savings and increased product throughput. The customer saves considerable time-to-market by using the fast response time of designing with Particle Interconnect, and avoids high tooling cost, or the purchase of many dedicated tester interface boards.
							<br>
							Particle Interconnect interposer allows the device under test to be evaluated in the same configuration as when the device is soldered to the application board. This allows a 6 to 18 month time-to-market improvement because a more accurate characterization of the device.
						</td>
					</tr>
					<tr>
						<td>
							Particle Interconnect Bare die test socket, and load board.
						</td>
						<td>
							<img src="images/TestSockets/BareDieTestSocket.jpg">
						</td>
					</tr>
				</tbody></table>
</section>
				<section id="1-3">
				<h3>Speed testing and binning for ICs</h3>
				<p>Increasing timing defects with small fabrication technologies require improving test quality. Therefore, at-speed testing is often necessary.</p>
				<p>Particle Interconnect provides improved impedance uniformity and control at the tester to die interface. This allows accurate and reliable testing at higher clock frequencies and/or faster rise time, so that speed-binning can be reliably extended to higher performance.</p>
				<p><font style="color: green"><b>Higher device yields are realized because smaller, more realistic guard-bands can be set, and testing can be performed at operating conditions.</b></font></p>
				<p>Particle Interconnect can also be used as a reliable and cost effective means of test and burn-in of bare die and whole wafers.</p>
</section>
				<section id="1-4">
				<h3>Particle Interconnect vs. pogo pin S<sub>11</sub> parameters</h3>
				<p>The measured insertion and return loss shows a 4 GHz resonance at the solder ball causing PCI-X return loss failure below 6 GHZ. <font style="color: green"><b>By replacing the standard pogo pin socket with Particle Interconnect socket the return and insertion was measured beyond 12 GHz, without modifying the board.</b></font></p>
				<div class="d-flex justify-content-center align-items-center">
					<img src="images/TestSockets/S11.jpg">
				</div>
</section>
				<section id="1-5">
				<h3>Lifetest comparison of Particle Interconnect vs. other sockets</h3>
				<h4>Tested to failure.</h4>
				<div class="d-flex justify-content-center align-items-center">
				<img src="images/TestSockets/PI-ContactLife.jpg">
			</div>
				<p>This graph illustrates the exceptionally long remate life the Particle Interconnect coating provides a contact. Since the non-wiping action of the particles does very little damage to the mating surface, contacts last for 1,000,000 insertions or more. While this number is higher than the most applications require, it does testify to the robustness of connections using Particle Interconnect coatings.</p>
</section>
				<section id="1-6">
				<h3>10 Gb/s PAM4 (Programmable Attribute Map) eye diagram</h3>
				<div class="d-flex justify-content-center align-items-center">
				<img src="images/TestSockets/EyeDiagram10Gb-PAM4.jpg">
			</div>
</section>
				<section id="1-7">
				<h3>Particle Interconnect contact resistance vs. contact force</h3>
				<img src="images/TestSockets/PI-ContactResistanceVSContactForce-1mmPitchBGAInterposer.jpg" alt="" title="" style="float:right; margin:0px 0px 0px 5px;">
				<h4>Gold probe to top side Particle Interconnect</h4>
				<p>Particle Interconnect's very low resistance results in higher current capacity.</p>
				<ul>
					<li>1 mm pitch BGA interposer.</li>
					<li>9.2 grams contact force (.0902 N, .020 lbs, or .325 Oz.)</li>
					<li>Contact resistance = .00433 &Omega;</li>
				</ul>
				<table border="0" cellpadding="0" cellspacing="0" align="center" valign="top">
					<tbody><tr>
						<td><img src="images/TestSockets/PI-ArrayTopSide.jpg"></td>
						<td><img src="images/TestSockets/PI-BottomSide.jpg"></td>
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
						<td align="center"><img src="images/TestSockets/ResistanceVsForce-BrightTinVsNonscrubSmoothSurface.jpg"></td>
						<td align="center"><img src="images/TestSockets/ResistanceVsForce-BrightTinVsPI.jpg"></td>
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
						<td><img src="images/TestSockets/ResistanceVsForce-SoftGoldVsNonscrubSmoothSurface.jpg"></td>
						<td><img src="images/TestSockets/ResistanceVsForce-SoftGoldVsPI.jpg"></td>
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
				<section id="1-8">
				<h3>Test demonstrating reduced guard band</h3>
				<h4>Plots of pin resistance deviation by pin number for 6 remates for each side of a QFP</h4>
				<p>Total variation for 6 insertions.</p>
				<p align="center"><img src="images/TestSockets/PI-SocketingChipOnBoardToMCMUsingPI-ISHMIEPS1993-8.gif"></p>
				<p align="center"><img src="images/TestSockets/PI-SocketingChipOnBoardToMCMUsingPI-ISHMIEPS1993-9.gif"></p>
				<p align="center"><img src="images/TestSockets/PI-SocketingChipOnBoardToMCMUsingPI-ISHMIEPS1993-10.gif"></p>
				<p align="center"><img src="images/TestSockets/PI-SocketingChipOnBoardToMCMUsingPI-ISHMIEPS1993-11.gif"></p>
</section>
				<section id="2">
				<h2>PLCC examples</h2>

				<h3>Particle Interconnect PLCC universal test socket</h3>
				<p>Nesting multiple packages in one design.</p>
				<p>0.050" pitch, 20-84 lead with coplanar verification built-in.</p>
				<table border="0" cellpadding="0" cellspacing="0" align="center" valign="top">
					<tbody><tr>
						<td>
							<img src="images/TestSockets/PI-PLCC-20-84Lead50MilSocket.jpg">
						</td>
						<td>
							<img src="images/TestSockets/PI-PLCC-NestedSocket.jpg">
						</td>
					</tr>
				</tbody></table>
</section>
				<section id="3">
				<h2>BGA examples</h2>

				<h3>Particle Interconnect socket replacing pogo pin</h3>
				<table border="0" cellpadding="0" cellspacing="0" align="center" valign="top">
					<tbody><tr>
						<td><img src="images/TestSockets/PI-676BGASocketHeatSink.jpg"></td>
						<td><img src="images/TestSockets/PI-676BGAInterposer.jpg"></td>
					</tr>
					<tr>
						<td align="center">Particle Interconnect socket with heat sink for 676 ball BGA</td>
						<td align="center">Particle Interconnect interposer for 676 ball BGA</td>
					</tr>
				</tbody></table>

				<h3>Particle Interconnect - Sandia Lab Known Good Die (KGD)</h3>
				<p>Known-Good-Die probe/burn-in. Proof of removable die MCM-L/D/C.</p>
				<ul>
					<li>0.030" pitch 19x19 miniBGA.</li>
					<li>Burn-in at 125 &deg; C, 168 hours.</li>
					<li>0 failures, 100+ runs, no deformation.</li>
				</ul>
				<table border="0" cellpadding="5" cellspacing="0" align="center" valign="top">
					<tbody><tr>
						<td><img src="images/TestSockets/PI-Sandia-MiniBGA30milPitchDieCloseup.jpg"></td>
						<td><img src="images/TestSockets/PI-BGA30milPitchSocket.jpg"></td>
					</tr>
					<tr>
						<td align="center">0 failures, 11 runs shown above.</td>
						<td align="center">Particle Interconnect surface mount BGA socket.</td>
					</tr>
				</tbody></table>
				<table border="0" cellpadding="0" cellspacing="0" align="center" valign="top">
					<tbody><tr>
						<td><img src="images/TestSockets/PI-Sandia-InterposerSchematic1993.jpg"></td>
						<td><img src="images/TestSockets/PI-Sandia-30milPitchInterposer.jpg"></td>
					</tr>
					<tr>
						<td align="center">Particle Interconnect - Sandia mBGA interposer schematic.</td>
						<td align="center">Sandia mBGA interposer</td>
					</tr>
				</tbody></table>

				<h3>Particle Interconnect through-hole BGA socket</h3>
				<p>0.050" pitch, 15x15 version.</p>
				<p><img src="images/TestSockets/PI-BGA50milPitchSocket.jpg"></p>

				<h3>Particle Interconnect seasaw BGA socket</h3>
				<p>BeCu spring material with Particle Interconnect bumps on opposite sides of opposite ends of beam.</p>
				<p><img src="images/TestSockets/PI-BGASeasawSocket.jpg"></p>
</section>
				<section id="4">
				<h2>Tab examples</h2>

				<h3>Particle Interconnect - Hughes Aircraft 1988 joint venture</h3>
				<p>Burned-in at 125 &deg; C for 168 hours.</p>
				<table border="0" cellpadding="0" cellspacing="0" align="center" valign="top">
					<tbody><tr>
						<td><img src="images/TestSockets/PI-Hughes-LoadBoardAssembly%26TABFrame.jpg"></td>
						<td><img src="images/TestSockets/PI-Hughes-TABTestSocket.jpg"></td>
					</tr>
					<tr>
						<td align="center">15 mil pitch, 188 lead, JEDEC Standard TAB test socket with 50 MHz high level D.U.T. tester.</td>
						<td align="center">15 mil pitch, 188 lead, JEDEC Standard TAB test socket.</td>
					</tr>
				</tbody></table>
				<p><img src="images/TestSockets/Hughes-TABFrame.jpg" alt="" title="" style="float:right; margin:0px 0px 0px 5px;"></p>
				<p>0.015" pitch OLB (Outer Lead Bond) - 0.006" pitch ILB (Inner Lead Bond) TAB (Tape Automated Bonding) tested/burned-in/speed-sorted.</p>
				<ol>
					<li>Excise line for flip chip mounting of TAB frame into finished MCM.</li>
					<li>Particle Interconnect ILB contact point onto 129k gate array.</li>
				</ol>

				<h3>Hughes TAB'ed test fixture</h3>
				<table border="0" cellpadding="0" cellspacing="0" align="center" valign="top">
					<tbody><tr>
						<td><img src="images/TestSockets/Hughes-TAB%27edTestFixture.jpg"></td>
						<td><img src="images/TestSockets/Hughes-TAB%27edTestFixture-Closeup.jpg"></td>
					</tr>
					<tr>
						<td align="center">Test fixture</td>
						<td align="center">Test fixture closeup</td>
					</tr>
				</tbody></table>
</section>
				<section id="5">
				<h2>Test fixture</h2>

				<h3>Particle Interconnect MCM-L membrane test fixture</h3>
				<table border="0" cellpadding="0" cellspacing="0" align="center" valign="top">
					<tbody><tr>
						<td>
							Particle Interconnect used on flex-circuit material to form a translator bare-board test fixture. The translator is constructed by using a simple two-sided, plated-through-hole, printed circuit board (PCB), which is coated with Particle Interconnect on both-sides. The translator PCB accommodates the difference between off-grid test points of the unit under test (UUT) and the universal grid of the board test system. The bottom side matches up with the testers on-grid pads. Traces from the bottom side connect to the top side with plated-through holes. The translator PCB becomes the test fixture.
						</td>
						<td>
							<img src="images/TestSockets/PI-MCM-L-TestFixture.jpg">
							<br>0.010" pad, 0.015" pitch, 0.004" compliance.
						</td>
					</tr>
				</tbody></table>

				<h3>Particle Interconnect bare board membrane test fixture</h3>
				<table border="0" cellpadding="0" cellspacing="0" align="center" valign="top">
					<tbody><tr>
						<td>
							The 0.020" pitch board (see insert) with more than 2400 test points and 2000 PCB has been tested with a single bareboard membrane test fixture.
						</td>
						<td>
							<img src="images/TestSockets/PI-PCBTestFixture.jpg">
						</td>
					</tr>
				</tbody></table>

				<h3>Particle Interconnect socket on load board</h3>
				<p>0.020" pitch 176 lead TQFP socket.</p>
				<p><img src="images/TestSockets/PI-20Mil176LeadTQFPSocketOnLoadBoard.jpg"></p>
</section>
				<section id="6">
				<h2>Controlled impedance to lead of package / die pad</h2>

				<h3>Controlled impedance to lead of package</h3>
				<table border="0" cellpadding="0" cellspacing="0" align="center" valign="top">
					<tbody><tr>
						<td><img src="images/TestSockets/PLCC-Schematic.jpg"></td>
						<td><img src="images/TestSockets/PI-PLCC-Lead30000Insertions.jpg"></td>
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
						<td><img src="images/TestSockets/PLCC-PCBLayout.jpg"></td>
						<td><img src="images/TestSockets/PLCC-MechanicalHolddown.jpg"></td>
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
						<td><img src="images/TestSockets/PLCC-CircuitLayout.jpg"></td>
						<td><img src="images/TestSockets/PLCC-CircuitLayout2.jpg"></td>
					</tr>
				</tbody></table>
				<h4>TDR of controlled impedance Particle Interconnect socket (interposer) on load board</h4>
				<style type="text/css">
					table.smaller {font-size: smaller; font-style: normal}
				</style>
				<table class="smaller" border="0" cellpadding="0" cellspacing="0" align="center" valign="top">
					<tbody><tr>
						<td><img src="images/TestSockets/PLCC-TDR-PI-Contribution1.jpg"></td>
						<td><img src="images/TestSockets/PLCC-TDR-PI-Contribution2.jpg"></td>
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
			</article>

		</main>
</body>
</html>