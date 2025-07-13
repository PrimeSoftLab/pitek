<?php
include("header.php");
?>

			<!-- Content -->

			<article id="content">
				<h1>Heat Exchanger, Heat Pipe, Heat Spreader</h1>

				<table border="0" cellpadding="0" cellspacing="0" align="center" valign="top">
					<tbody><tr>
						<td width="50%">
							<ol type="I">
								<li><a href="#1">High-performance microchannel heat exchanger</a></li>
								<li><a href="#2">High-performance heat pipe</a></li>
								<li><a href="#3">Heat spreader</a></li>
								<li><a href="#4">Cooling electronic systems</a></li>
								<li><a href="#5">Comparing heat sink designs and products on the market</a></li>
								<ol type="1">
									<li><a href="#5.1">Microchannel liquid cooling using grooves etched in silicon</a></li>
									<li><a href="#5.2">Liquid cooling</a></li>
									<li><a href="#5.3">Heat pipe cooling</a></li>
									<li><a href="#5.4">Spray cooling</a></li>
									<li><a href="#5.5">Droplet cooling</a></li>
									<li><a href="#5.6">Rack-mounted heat exchangers</a></li>
									<li><a href="#5.7">Thermoelectric coolers</a></li>
									<li><a href="#5.8">Thermionic coolers</a></li>
									<li><a href="#5.9">Survey of IC cooling methodologies</a></li>
									<li><a href="#5.10">Platelet diffusion bonded heat exchanger</a></li>
								</ol>
								<li><a href="#6">VLSI heat limiting Moore's law</a></li>
								<li><a href="#7">Typical supercomputer center requirements</a></li>
							</ol>
						</td>
						<td>
							<img src="images/HeatExchanger/PI-BumpCloseUp.jpg">
							<br>Close-up of Particle Interconnect pads shows controlled stacking of particles to a desired height with clearance between individual particles.
						</td>
					</tr>
				</tbody></table>

				<section id="1">
				<h2>High-performance microchannel heat exchanger</h2>

				<h3>Microchannel heat exchanger</h3>
			  <div class="d-flex justify-content-center align-items-center">
			    <img src="images/HeatExchanger/MicroChannelHeatExchanger.jpg" class="img-fluid" alt="Heat Exchanger">
			  </div>
				<h3>Stacked copper fin with spacer microchannel heat exchanger design</h3>
				<ul>
					<li>Cooling capacity: Demonstrated > 5000 W/cm<sup>2</sup>.</li>
					<li>Stress-free direct contact with die.</li>
					<li>Made of stacked electroformed layers with high thermal capacity microchannels.</li>
					<li>Microchannels have laminar flow, with the enhanced heat transfer coefficient inversely proportional to the width of the channel (heat transfer coefficient increases, as width decreases).</li>
				</ul>
				<table border="0" cellpadding="0" cellspacing="0" align="center" valign="top">
					<tbody><tr>
						<td><img src="images/HeatExchanger/HeatSink.jpg"></td>
						<td>
							Heatsink solid drawing
							<br>Blue is spacer, red is fin, gold is inlet or outlet
						</td>
					</tr>
				</tbody></table>
				<table border="0" cellpadding="0" cellspacing="0" align="center" valign="top">
					<tbody><tr>
						<td><img src="images/HeatExchanger/HeatSink2.gif"></td>
						<td><img src="images/HeatExchanger/HeatSink3.gif"></td>
					</tr>
					<tr>
						<td>Stress in heatsink</td>
						<td>Single fin & fluid channel heatsink FEA</td>
					</tr>
				</tbody></table>
				<ul>
					<li>0.002" thick copper fin, 0.002" thick fluid channel results in 250 fin-channel/inch of heatsink thickness
					</li>
					<li>250 W/in of heatsink thickness for water
					</li>
					<li>12.5 W/in of heatsink thickness for air, with all conditions the same
					</li>
					<li>Heat influx of (1 W along bottom of fin and channel) / (area of 1.5" x 0.004" = 0.006"<sup>2</sup>) = 166 W/in<sup>2</sup> for heatsink 
					</li>
					<li>
					  Water inlet temperature is 70&deg;F &amp; outlet temperature 74&deg;F, 
					  &Delta;T = 4&deg;F, max possible &Delta;T = 212&deg;F - 32&deg;F = 180&deg;F 
					  (0.2% of available temperature range)
					</li>

					<li>Water pressure = 2 psi, flowing at 5 in/s per channel, has 47 psi stress out of 43,672 psi max seam capacity (0.1% of available seam capacity)
				</li>
			</ul>
</section>
				<section id="2">
				<h2>High-performance heat pipe</h2>

				<p>Voids between high thermal conductivity diamond particles form enhanced heat pipe wick and channels.</p>
				<p>The heat flux capability of heat pipe depends on the boiling temperature of evaporator, and the evaporator wick structures surface.</p>

				<h3>Examination of particle uniformity</h3>
				<table border="0" cellpadding="0" cellspacing="0" align="center" valign="top">
					<tbody><tr valign="top">
						<td>
							<ul>
								<li>6-12 &micro; particles coated with Ni and Cu, and pressed onto Cu.</li>
								<li>SEM at 1090x magnification, 60 degree angle.</li>
							</ul>
						</td>
						<td>
							<img src="images/HeatExchanger/ExaminationOfParticleUniformity.jpg">
						</td>
					</tr>
				</tbody></table>

				<h3>Applications</h3>
				<p>Electroformed microchannel heat exchanger has high thermal density, which is useful for applications with high-density electronic packages or high-power dissipation of electronics. The improved heat transfer capability of the electroformed microchannel structure also results in a lower junction-to-ambient temperature rise and an increase in reliability of the system.</p>
				<p>The microchannel heat exchanger requires less material resulting in smaller, lighter-weight cabinets and hardware. Products which are weight-constrained and/or space-constrained and which have significant power dissipation are likely candidates for improvements in cooling capacity and size reduction. For example:</p>
				<ul>
					<li>Airborne devices, are especially sensitive to size and weight requirements making them good candidates for such improvement.</li>
					<li>Large computer and groundbased radars can benefit from improved cooling capacity and size reduction.</li>
				</ul>
				<p>Heat exchanger is compatible with the environment to which military equipment is exposed.</p>
</section>
				<section id ="3">
				<h2>Heat spreader</h2>

				<p>Particle Interconnect allows to remove heat from die through back side heat spreader and front side die pads.</p>

				<h3>Particle Interconnect thermal via</h3>
				<p>Connecting two conducting surfaces together.</p>
				<table border="0" cellpadding="0" cellspacing="10" align="center" valign="top">
					<tbody><tr>
						<td align="center"><b>Particle closeup<b></b></b></td>
						<td align="center"><b>Connector closeup<b></b></b></td>
					</tr>
					<tr>
						<td><img src="images/HeatExchanger/PI-Via1.jpg"></td>
						<td><img src="images/HeatExchanger/PI-Via2.jpg"></td>
					</tr>
				</tbody></table>

				<h3>Particle Interconnect contact resistance vs. contact force</h3>
				<img src="images/HeatExchanger/PI-ContactResistanceVSContactForce-1mmPitchBGAInterposer.jpg" alt="" title="" style="float:right; margin:0px 0px 0px 5px;">
				<h4>Gold probe to top side Particle Interconnect</h4>
				<p>Particle Interconnect's very low resistance results in higher current capacity.</p>
				<ul>
					<li>1 mm pitch BGA interposer.</li>
					<li>9.2 grams contact force (.0902 N, .020 lbs, or .325 Oz.), 12 amps.</li>
					<li>Contact resistance = .00433 &Omega;</li>
				</ul>
				<table border="0" cellpadding="0" cellspacing="0" align="center" valign="top">
					<tbody><tr>
						<td><img src="images/HeatExchanger/PI-ArrayTopSide.jpg"></td>
						<td><img src="images/HeatExchanger/PI-BottomSide.jpg"></td>
					</tr>
					<tr>
						<td align="center">Particle Interconnect array top side</td>
						<td align="center">Particle Interconnect bottom side close up</td>
					</tr>
				</tbody></table>

				<h3>Thermal conductivity, coefficient of thermal expansion, and density</h3>
				<p>Conductive heat flux = - k  T H - k &Delta; Temperature/distance; where k = thermal conductivity</p>
				<style type="text/css">
					table.smaller {font-size: smaller; font-style: normal}
				</style>
			<table class="table-bordered" border="1" cellpadding="5" cellspacing="0" align="center" valign="top">
				<tbody><tr bgcolor="#cccccc">
						<td>Reinforcement</td>
						<td>Matrix</td>
						<td>Inplane thermal conductivity (W/m-K)</td>
						<td>Through-thickness thermal conductivity (W/m-K)</td>
						<td>Inplane CTE (ppm/K)</td>
						<td>Density (g/cm<sup>3</sup>)</td>
						<td>Specific inplane thermal conductivity (W/m-K)</td>
					</tr>
					<tr align="center">
						<td>-</td>
						<td>CVD diamond</td>
						<td>1100 - 1800</td>
						<td>1100 - 1800</td>
						<td>1 - 2</td>
						<td>3.52</td>
						<td>310 - 510</td>
					</tr>
					<tr align="center">
						<td>Diamond particles</td>
						<td>Copper</td>
						<td>600 - 1200</td>
						<td>600 - 1200</td>
						<td>5.8</td>
						<td>5.9</td>
						<td>102 - 203</td>
					</tr>
					<tr align="center">
						<td>Diamond Particles</td>
						<td>Cobalt</td>
						<td>>600</td>
						<td>>600</td>
						<td>3.0</td>
						<td>4.12</td>
						<td>>145</td>
					</tr>
					<tr align="center">
						<td>Diamond Particles</td>
						<td>Aluminum</td>
						<td>550 to 600</td>
						<td>550 to 600</td>
						<td>7.0 to 7.5</td>
						<td>3.1</td>
						<td>177 to 194</td>
					</tr>
					<tr align="center">
						<td>Diamond Particles</td>
						<td>Silver</td>
						<td>400 to >600</td>
						<td>400 to >600</td>
						<td>5.8</td>
						<td>5.8</td>
						<td>69 to >103</td>
					</tr>
					<tr align="center">
						<td>Diamond Particles</td>
						<td>SiC</td>
						<td>600</td>
						<td>600</td>
						<td>1.8</td>
						<td>3.3</td>
						<td>182</td>
					</tr>
					<tr align="center">
						<td>-</td>
						<td>Copper</td>
						<td>400</td>
						<td>400</td>
						<td>17</td>
						<td>8.9</td>
						<td>45</td>
					</tr>
					<tr align="center">
						<td>-</td>
						<td>Aluminum</td>
						<td>218</td>
						<td>218</td>
						<td>23</td>
						<td>2.7</td>
						<td>81</td>
					</tr>
					<tr bgcolor="#cccccc" align="center">
						<td>&nbsp;</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr align="center">
						<td>-</td>
						<td>Solder - Sn63/Pb37</td>
						<td>50</td>
						<td>50</td>
						<td>25</td>
						<td>8.4</td>
						<td>6.0</td>
					</tr>
					<tr align="center">
						<td>-</td>
						<td>Kovar</td>
						<td>17</td>
						<td>17</td>
						<td>5.9</td>
						<td>8.3</td>
						<td>2.0</td>
					</tr>
					<tr align="center">
						<td>-</td>
						<td>Invar</td>
						<td>11</td>
						<td>11</td>
						<td>1.3</td>
						<td>8.1</td>
						<td>1.4</td>
					</tr>
					<tr align="center">
						<td>-</td>
						<td>Epoxy</td>
						<td>1.7</td>
						<td>1.7</td>
						<td>54</td>
						<td>1.2</td>
						<td>1.4</td>
					</tr>
					<tr align="center">
						<td>E-glass Fibers</td>
						<td>Epoxy</td>
						<td>0.16 to 0.26</td>
						<td>0.16 to 0.26</td>
						<td>11 to 20</td>
						<td>2.1</td>
						<td>0.1</td>
					</tr>
					<tr bgcolor="#cccccc" align="center">
						<td>&nbsp;</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr align="center">
						<td>Natural Graphite</td>
						<td>Epoxy</td>
						<td>370</td>
						<td>6.5</td>
						<td>-2.4</td>
						<td>1.94</td>
						<td>190</td>
					</tr>
					<tr align="center">
						<td>Continuous Carbon Fibers</td>
						<td>Polymer</td>
						<td>330</td>
						<td>10</td>
						<td>-1.</td>
						<td>1.8</td>
						<td>183</td>
					</tr>
					<tr align="center">
						<td>Discontinuous Carbon Fibers</td>
						<td>Copper</td>
						<td>300</td>
						<td>200</td>
						<td>6.5 to 9.5</td>
						<td>6.8</td>
						<td>44</td>
					</tr>
				</tbody></table>
</section>
				<section id="4">
				<h2>Cooling electronic systems</h2>

				<p>The present state of the art in cooling techniques uses turbulent flow macro-channel heat exchangers. Present heat exchangers use fin spacing which is large with poor thermal transfer efficiency. Additionally, the heat source is often separated from the heat exchanger by several thermal interfaces or is separated by poor thermally conductive materials such as thermal grease which results in poor heat transfer.</p>
				<p>An important physical problem in computer systems is that of heat dissipation and removal. The heat generated by a single logic gate is small: at most a few milliwatts for most high-speed logic such as ECL (emitter coupled logic) and is much less for other logic families such as CMOS (complementary metal oxide semiconductors). However, when VSLI (very large scale integrated circuit) systems are fabricated with millions of gates on a single chip, the total power consumption could conceivably reach the kilowatt level if high-performance logic is used. Even if a low-power logic family is used, a complete high-performance computer system might have 10<sup>7</sup> to 10<sup>8</sup> switching elements (e.g., transistors) and comprise hundreds of chips. If these chips are packed very closely together to minimize propagation delays, the problem of removing tens or (even hundreds) of kilowatts of heat while maintaining normal circuit temperatures (usually less than 120&deg; C. Preferably even lower for enhanced reliability) from a system volume of less than 1 liter becomes challenging.</p>

				<h3>Silicon-on-sapphire IC mounted on sapphire wafer</h3>
				<p>Stacked two 3" sapphire wafers. 0.001" line, 0.001" space, with integrated decoupling capacitor, and integrated active substrate in 1982, using specially developed sputtered fluxless hermetic interconnect.</p>
				<table border="0" cellpadding="0" cellspacing="0" align="center" valign="top">
					<tbody><tr>
						<td><img src="images/HeatExchanger/StackedWafer.jpg"></td>
						<td><img src="images/HeatExchanger/StackedWafer2.jpg"></td>
					</tr>
					<tr>
						<td align="center">Wafers before stacking</td>
						<td align="center">Close up</td>
					</tr>
				</tbody></table>
</section>
				<section id="5">
				<h2>Comparing heat sink designs and products on the market</h2>
</section>
				<section id="5.1">
				<h3>1. Microchannel liquid cooling using grooves etched in silicon</h3>
				<p>Larry DiFrancesco funded, recruited, reviewed, and supervised Ph.D. work on microchannel liquid cooling at Stanford from 1988 to 1990.</p>
				<p>Silicon etching is expensive and slow, and silicon heat transfer coefficient is low. There is an interface between heat exchanger and the die.</p>

				<h4>i. Theory</h4>
				<p>1. D.B. Tuckerman and R.F.W. Pease, <a href="http://ieeexplore.ieee.org/iel5/55/31839/01481851.pdf">"High-Performance Heat Sinking for VLSI"</a>, IEEE Electron Device Letters, vol. 2, pp.126-129, 1981</p>
				<blockquote>
					<p>The problem of achieving compact, high-performance forced liquid cooling of planar integrated circuits has been investigated. The convective heat-transfer coefficient h between the substrate and the coolant was found to be the primary impediment to achieving low thermal resistance. For laminar flow in confined channels, h scales inversely with channel width, making microscopic channels desirable. The coolant viscosity determines the minimum practical channel width. The use of high-aspect ratio channels to increase surface area will, to an extent, further reduce thermal resistance. Based on these considerations, a new, very compact, water-cooled integral heat sink for silicon integrated circuits has been designed and tested. At a power density of 790 W/cm<sup>2</sup>, a maximum substrate temperature rise of 71&deg;C above the input water temperature was measured, in good agreement with theory. By allowing such high power densities, the heat sink may greatly enhance the feasibility of ultrahigh-speed VLSI circuits.</p>
				</blockquote>

				<p>2. Semiconductor Research Corporation Newsletter, vol. 2 no. 5 May 1984</p>
				<blockquote>
					<p>...</p>
					<p>SRC-032 Stanford University, <a href="http://www.src.org/member/about/arch/84v02n05.pdf">"Heat Transfer Microstructures for Integrated Circuits,"</a> David Bazeley Tuckerman, Contract No. 82-11-002. February 1984.</p>
					<p>Abstract: The design of high-speed integrated circuits and systems is often constrained by thermal considerations. As late as 1981, it was authoritatively predicted that the maximum achievable power flux for liquid-cooled, densely-packed integrated circuits (ICs) would be about 20 W/cm<sup>2</sup>.</p>
					<p>Convective heat-transfer theory indicates that well over 1000 W/cm<sup>2</sup> can be compactly removed from ICs at normal operating temperatures, provided microscopic (e.g., 50-&micro;m wide) extended-surface structures are used. The difficulty of constructing high conductance, low-stress thermal interfaces between ICs and heat sinks suggests the use of an integral heat sink. Accordingly, IC microfabrication techniques were employed to design, fabricate, and test novel, ultracompact water-cooled, laminar-flow, optimized plate-fin and pin-fin heat sinks directly within standard-thickness silicon substrates. Worst-case thermal resistances as low as 0.083&deg; C/W were measured from 1-cm<sup>2</sup> thin-film resistors (e.g., a 108&deg; C temperature rise at 1309 W), in good agreement with predictions. Further increases in heat transfer are achievable.</p>
					<p>The use of integral liquid-cooled heat sinks in multichip systems presents potential yield, reliability, cost and packaging problems. Attachment of unmodified ICs to micro-heat sinks seems a more attractive approach. A novel die-attachment technique has been developed which avoids the problems of conventional attachments. In this technique, a liquid partially fills an array of micron-wide reentrant capillaries in the heat sink substrate, so that surface tension holds the polished back of an IC in intimate thermal contact with the heat sink. The bond is void free, virtually stress-free, long-lived, and allows repeated detachment and replacement of ICs without damaging the heat sink substrate. The reentrant grooves were fabricated by a novel process using electroless plating of nickel onto vertical silicon microgrooves. For a 1-cm<sup>2</sup> area, typical interfacial thermal resistances of 0.022&deg; C/W at 300 W have been measured.</p>
					<p>In summary, microfabrication techniques have been employed to fabricate new, very high-performance liquid-cooled heat sinks having negligible volume (0.1 cm<sup>3</sup>), and also to make a novel, stress-free, reusable microcapillary thermal interface between such heat sinks and integrated circuit substrates. These techniques allow the VLSI system designer more freedom, in that power consumption may be greatly increased while simultaneously realizing the reliability benefits of a much lower operating temperature.</p>
					<p>...</p>
				</blockquote>

				<h4>ii. Silicon microchannel</h4>
				<blockquote>
					<p><a href="http://www.cooligy.com/microchannels.html">Cooligy microchannel cooling</a></p>
					<p>...</p>
					<p>Microchannels as a means of cooling integrated circuits have been theorized since 1981, when Stanford professors Dr. David Tuckerman and Dr. Fabian Pease published research proving that <font style="color: green;"><b>microchannels etched into silicon could remove heat densities as high as 1000 watts per square centimeter</b></font>.</p>
					<p>...</p>
				</blockquote>
</section>
				<section id="5.2">
				<h3>2. Liquid cooling</h3>

				<h4>i. Liquid flow through</h4>
				<p><a href="http://www.vita.com/cool/pres-2004/1050-robles.pdf">A System Level View of Avionics/Vetronics Cooling Options for Harsh Environment Two-Level Maintenance Systems</a></p>
				<blockquote>
					<p>
						CoolCON 2004<br>
						Advanced Cooling Workshop<br>
						May 11th, 2004<br>
						Jim Robles --- The Boeing Company<br>
						Ivan Straznicky --- Dy4<br>
					</p>
					<p>...</p>
					<p>Liquid Flow Through (LFT) Cooling is the preferred module option when liquid cooling is available</p>

					<style type="text/css">
						table.smaller {font-size: smaller; font-style: normal}
					</style>
			<table class="table-bordered" border="1" cellpadding="5" cellspacing="0" align="center" valign="top">
				<tbody><tr bgcolor="#cccccc">
							<td rowspan="2" bgcolor="#cccccc">Cooling Option for Liquid Cooled Systems</td>
							<td rowspan="2" bgcolor="#cccccc">Total Ownership Cost</td>
							<td colspan="3" bgcolor="#cccccc">Performance vs. Weight and Volume</td>
							<td rowspan="2" bgcolor="#cccccc">Reliability</td>
							<td rowspan="2" bgcolor="#cccccc">Two-Level Maintenance Compatibility</td>
							<td rowspan="2" bgcolor="#cccccc">Ease of Technology Insertion</td>
						</tr>
						<tr align="center">
							<td bgcolor="#cccccc">Allowable Power (watts)</td>
							<td bgcolor="#cccccc">Pitch (cm)</td>
							<td bgcolor="#cccccc">watts/cm</td>
						</tr>
						<tr align="center">
							<td>Custom Design LFT</td>
							<td>Medium to High</td>
							<td>300</td>
							<td>1.524</td>
							<td><font style="color: green;"><b>200</b></font></td>
							<td>Highest</td>
							<td>Yes</td>
							<td>High (100% Thermal Margin)</td>
						</tr>
						<tr align="center">
							<td rowspan="2">Custom Design Conduction Cooled</td>
							<td>High</td>
							<td>85</td>
							<td>1.524</td>
							<td>60</td>
							<td>Low</td>
							<td>Yes</td>
							<td>Marginal (Zero Thermal Margin)</td>
						</tr>
						<tr align="center">
							<td>High</td>
							<td>110</td>
							<td>2.794</td>
							<td>40</td>
							<td>Low</td>
							<td>Yes</td>
							<td>Extremely Poor</td>
						</tr>
						<tr align="center">
							<td>Edge Mist Spray Cooling with Available COTS Modules</td>
							<td>Low</td>
							<td>90</td>
							<td>2.032</td>
							<td>40</td>
							<td>Medium</td>
							<td>No</td>
							<td>Poor</td>
						</tr>
						<tr align="center">
							<td>Edge Mist Spray Cooling with COTS Modules</td>
							<td>Low</td>
							<td>100 to 200</td>
							<td>2.032</td>
							<td>50 to 100</td>
							<td>Medium</td>
							<td>No</td>
							<td>Poor</td>
						</tr>
						<tr align="center">
							<td>Direct Spray Cooling with COTS Modules</td>
							<td>Low</td>
							<td>300 to 400</td>
							<td>4.064</td>
							<td>70 to 100</td>
							<td>High</td>
							<td>No</td>
							<td>High</td>
						</tr>
						<tr align="center">
							<td>Direct Spray Cooling with Custom Design Modules</td>
							<td>Medium to High</td>
							<td>700 to 1000</td>
							<td>3.048</td>
							<td>230 to 330</td>
							<td>High</td>
							<td>No</td>
							<td>Highest</td>
						</tr>
						<tr align="center">
							<td>Available Conduction Cooled VME/PCI COTS</td>
							<td>Low</td>
							<td>90</td>
							<td>2.032</td>
							<td>40</td>
							<td>Medium</td>
							<td>No?</td>
							<td>Poor (Limited Thermal Margin)</td>
						</tr>
						<tr align="center">
							<td>Conduction Cooled VME/PCI COTS Within Current Standards</td>
							<td>Low</td>
							<td>160</td>
							<td>2.032</td>
							<td>80</td>
							<td>High</td>
							<td>No?</td>
							<td>Marginal (Zero Thermal Margin)</td>
						</tr>
						<tr align="center">
							<td>Conduction Cooled COTS per VITA 46</td>
							<td>Lower</td>
							<td>190</td>
							<td>2.540</td>
							<td>80</td>
							<td>High</td>
							<td>Yes?</td>
							<td>Medium (30% Thermal Margin</td>
						</tr>
						<tr align="center">
							<td>LFT Cooled COTS per VITA 46</td>
							<td>Lowest</td>
							<td>400</td>
							<td>2.794</td>
							<td>140</td>
							<td>Highest</td>
							<td>Yes?</td>
							<td>High (170% Thermal Margin)</td>
						</tr>
					</tbody></table>
					<p>...</p>
				</blockquote>

				<h4>ii. Piezoelectric pump</h4>
				<p><a href="http://www.nec.co.jp/eco/en/annual2004/05/5-4-4.html">Development of Water-Cooled Module for Noise-Free and Thin Laptop PCs</a></p>
				<blockquote>
					<p>NEC has developed a piezoelectric-pump-driven thin water-cooled module to achieve noise-free and thin laptop PCs.</p>
					<p>...</p>
				</blockquote>
</section>
				<section id="5.3">
				<h3>3. Heat pipe cooling</h3>
				<p><a href="http://www.electronics-cooling.com/Resources/EC_Articles/SEP96/sep96_02.htm">Heat pipes for electronics cooling applications</a></p>
				<blockquote>
					<p>Scott D. Garner, PE., Thermacore Inc</p>
				</blockquote>

				<h4>i. high heat flux heat pipe</h4>
				<p><a href="http://www.thermacore.com/">Thermacore</a></p>
				<blockquote>
					<p>...</p>
					<p>High Heat Flux Heat Pipe Technologies</p>
					<p>...</p>
					<p><font style="color: green;"><b>Bi-dispersed wicks Demonstrated to 1,000 W/cm<sup>2</sup></b></font></p>
					<p>...</p>
				</blockquote>

				<h4>ii. Notebook computer heat pipe</h4>
				<p><a href="http://www.nexustek.nl/tdd3000.htm">TDD-3000 Heat Pipe Technology Laptop Cooler</a></p>
				<blockquote>
					<p>Nexus Thermal Innovation introduces the TDD-3000. A revolutionairy notebook computer cooler with heat-pipe technology. The TDD-3000 cools a notebook computer without producing any noise and even without any installation or power usage. ...</p>
					<ul>
						<li>Fann-less, zero-noise operation, reduces computer noise by reducing internal fan usage.</li>
						<li>Increases overall computer battery life by reducing internal cooling fan usage.</li>
					</ul>
					<p>...</p>
				</blockquote>

				<h4>iii. CPU heat sinks</h4>
				<blockquote>
					<p><a href="http://www.pcstats.com/articleview.cfm?articleid=1480&page=5">Auras T6C Pentium 4 Heatsink Review</a></p>
					<p>...</p>
					<p>The bottom line looks something like this; the copper heatpipes and fins of the Auras T6C seem ideal, but the heatsink really isn't able to muster up any high end cooling performance. Instead, the Auras T6C settles for the title of an average heatsink, not the quietest, not the most thermally efficient ...</p>
					<p><a href="http://www.auras.com.tw/_product_detail_1.asp">Auras Technology CPU Coolers</a></p>
					<p><a href="http://www.avc.com.tw/products/oem/nb%20thermal-products/index--b.html">Asia Vital Components Thermal Solution</a></p>
				</blockquote>
</section>
				<section id="5.4">
				<h3>4. Spray cooling</h3>

				<h4>i. High End Computing -- Research and Development</h4>
				<p><a href="http://www.nitrd.gov/pubs/bluebooks/2001/hec-rd.html">3-D diamond multichip module (MCM) cube computer</a></p>
				<blockquote>
					<p>...</p>
					<p>A 3-D computer architecture with a nanosecond system clock was completed in FY 2000 using test equipment developed by NSA and DARPA. After demonstrating a three-dimensionally interconnected stack of diamond aerosol spray-cooled MCMs, the subnanosecond clock performance of five-stack 3-D interconnected diamond substrates verified the modeled performance for delay times through a "worst case nodal path." The emulated performance of a 40-layer stack was achieved through the use of "turn-around" boards at the top and bottom of the five-layer stack. The five-layer stack dissipated 2.5 kilowatts of heat while the maximum measured temperature on the 16 sensors per layer was 80 degrees centigrade in the center of the third MCM layer. The 500 watts per MCM were extracted by aerosol spray cooling of the exposed edges on two sides of the four-sided diamond substrate MCMs. Although this design used an older "fuzz button" interconnect technology for connecting the stacked thin-film-layered diamond substrates together (6,200 connections for each side of the MCM), no observed failures were recorded during the six-week qualifying tests. These results verified the 3-D concept for a diamond-substrate-based, aerosol spray-cooled supercomputer design.</p>
					<p>...</p>
				</blockquote>

				<h4>ii. NSA Supercomputing Research</h4>
				<p><a href="http://www.nitrd.gov/pubs/implementation/1997/98.html">FY 1997 Implementation Plan</a></p>
				<blockquote>
					<p>...</p>
					<p>MICRO SPRAY COOLING - Heat extraction values as high as 250 Watts per square centimeter have been demonstrated using micromachined spray head cooling. Values as high as 700 Watts per square centimeter are claimed to be possible by using dynamic feedback temperature sensors.</p>
					<p>...</p>
				</blockquote>

				<h4>iii. Cray X1</h4>
				<p><a href="http://www.micropump.com/whats_new/case_studies/electronic_cooling.asp">Magnetic Drive Gear Pumps Ensure Maximum Heat Transfer Efficiency in High Density Microelectronics Packaging</a></p>
				<blockquote>
					<p>Leak-free pumps help enable spray evaporative cooling applications</p>
					<p>As microelectronic circuitry reaches unprecedented levels in density, thermal management continues to play a critical role in packaging strategies. With power density levels expected to reach well over 100 w/cm<sup>2</sup> in the not-too-distant future, computer mainframes, telecommunications equipment, supercomputers, and high-power systems will increasingly require improved cooling that is not possible with traditional air cooling or direct immersion cooling technologies.</p>
					<p>...</p>
					<p>Cooling the Cray X1</p>
					<p>The Cray X1 "next generation" supercomputer utilizes spray evaporative cooling with a magnetically coupled gear pump as one of its enabling packaging technologies for meeting the computer's performance and architectural demands. The Cray X1 exceeds the performance of computers using current PCB technology by incorporating ceramic multi-chip modules (MCM-C). The high density packaging design produces heat fluxes on the ICs and MCMs that approach values of 65 and 15 w/cm<sup>2</sup> respectively. ...</p>
					<p>Spray evaporative cooling (SEC) was selected because it would efficiently and effectively cool the high power density application-specific integrated circuits (ASICs) on each MCM and minimize temperature variation between ASICs at different power levels. SEC stabilizes the junction temperatures of the ASICs to between 70&deg; and 85&deg; C. The heat flux on the ASICs range from 15 w/cm<sup>2</sup> to 55 w/cm<sup>2</sup>.</p>
					<p>...</p>
				</blockquote>

				<h4>iv. SprayCool</h4>
				<p><a href="http://www.spraycool.com/products/solutions.asp">Benefits</a></p>
				<blockquote>
					<p>...</p>
					<p>The main function of SprayCool is to use evaporative cooling to keep electronics in their prime operating range, thus reducing thermal related failures. ...</p>
				</blockquote>
</section>
				<section id="5.5"></a>
				<h3>5. Droplet cooling</h3>

				<p><a href="http://www.ices.cmu.edu/amon/Projects/Summaries/EDIFICE.html">EDIFICE: Embedded Droplet Impingement For Integrated Cooling of Electronics</a></p>
				<blockquote>
					<p>In this work we are developing an integrated droplet impingement cooling device, called EDIFICE, for removing heat fluxes in the range 50-100 W/cm^2 in portable electronics for both military and commercial applications. It combines efficient phase-change heat transfer utilizing latent heat of vaporization of dielectric coolants and on-chip control to provide localized, adaptive, on-demand cooling. To satisfy temporal and spatial heat removal requirements, it will contain built-in software to provide on-demand cooling, which will be achieved through the control of droplet sizes, impingement frequencies and impingement locations based on the on-chip sensing of temperature, thermal gradients and dielectric film thickness. Micro-sized droplets of 50 [-] 200 microns at frequencies of 100 Hz to 1 MHz impinge on a micro-textured enhanced chip surface. EDIFICE is integrated with the package and fabricated using advanced micro-manufacturing technologies.</p>
					<p>...</p>
				</blockquote>
</section>
				<section id="5.6">
				<h3>6. Rack-mounted heat exchangers</h3>
		
				<p><a href="http://www.research.vt.edu/resmag/2004resmag/HowX.html">How Virginia Tech built a supercomputer</a></p>
				<blockquote>
					<p>...</p>
					<p>The biggest challenge was AC design. "The traditional system, which cools from under the floor, would have required nine large units and would have created 60 mph winds under the floor," says Shinpaugh. "Liebert looked at our environment and recommended their new extreme high-density system, with external chillers and copper lines overhead to rack-mounted heat exchangers with R-134A refrigerant and an overhead chiller unit providing more than 2 million BTUs of cooling capacity. They also provided the custom-built racks for the computers."</p>
					<p>Arvin points out that the Liebert system saved a lot of space. "For example, Oak Ridge National Lab uses 40,000 square feet for their eight-megawatt computing facility. By that rule of thumb, we would have needed 20,000 square feet."</p>
					<p>...</p>
				</blockquote>

				<p><a href="http://napps.nwfusion.com/news/2004/0531environmental.html">Users also taking steps to dial down server heat</a></p>
				<blockquote>
					<p>
						By Deni Connor and Jennifer Mears<br>
						Network World, 05/31/04<br>
						...
					</p>
					<p>Shinpaugh looked for other options for cooling the servers and finally settled on precision cooling systems from Liebert that suck hot air out of racks and use rack- or ceiling-mounted air conditioning units.</p>
					<p>"We had about 3,000 square feet of available space [for the cluster] and the [Liebert] extreme cooling option allowed us to do what we needed to do," he says. "Our only other option would have been to build another building."</p>
					<p>Shinpaugh says the school spent about <font style="color: green;"><b>$2 million for the cooling devices and adding power</b></font>, but says now the data center has excess power and cooling capacity, and will be able to handle additional systems over the next few years.</p>
					<p>...</p>
					<p>Brill says some blade users have reported as much as 14 kilowatts of heat output per rack, about the same amount of heat given off by two household electric ovens.</p>
					<p>...</p>
				</blockquote>
</section>
				<section id="5.7">
				<h3>7. Thermoelectric coolers</h3>

				<p><a href="http://www.vita.com/cool/pres-2004/1330-johnson.pdf">High Watt Density Thermoelectric Coolers Enhance Performance-Limited Heat Sinks</a></p>
				<blockquote>
					<p>... "The best efficiencies for today's TECs are 6-8% of Carnot"</p>
					<p>Fact: Marlow is able to achieve nearly twice this (12-13%) with optimized designs using MAM thermoelectric material.</p>
					<p>...</p>
				</blockquote>

				<p><a href="http://www.activecool.com/">Active Cool</a></p>
				<blockquote>
					<p>Active Cool produces ... the world's first and only smart thermo-electric cooling system for PC CPUs.</p>
				</blockquote>
				<p><a href="http://www.activecool.com/technotes/thermoelectric.html">Understanding Thermoelectric Cooling</a></p>
</section>
				<section id="5.8">
				<h3>8. Thermionic coolers</h3>
				<p><a href="http://www.coolchips.gi/faq.shtml">Cool Chips - Frequently Asked Questions</a></p>
				<blockquote>
					<p>...Hishinuma Y, Geballe TH, Moyzhes BY, Kenny TW (2001) Refrigeration by combined tunneling and thermionic emission in vacuum: use of nanometer scale design. Applied Physics Letters 78 (17):2572-2574.</p>
					<p>...The Stanford paper (see above) projects outputs for known materials as high as 5000 watts/cm<sup>2</sup>. Because of other limitations, we expect the maximum practical output to be on the order of hundreds of watts/cm<sup>2</sup>. However, long before development begins approaching anywhere near these maximum outputs, Cool Chips with a density projected at 3-5 watts/cm<sup>2</sup> will be more than adequate for meeting most cooling requirements.</p>
					<p>...</p>
				</blockquote>
</section>
				<section id="5.9">
				<h3>9. Survey of IC cooling methodologies</h3>
				<p><a href="http://www.spectrum.ieee.org/WEBONLY/publicfeature/may04/0504ther.html">Beat the heat</a></p>
				<blockquote>
					<p>IEEE Spectrum Online</p>
					<p>Of all the issues facing chip and computer designers, none is more burning than the soaring levels of power flowing through integrated circuits</p>
					<p>By Philip E. Ross</p>
					<p>A little over a year ago, a Swedish scientist learned the hard way that laptop computers do not quite live up to their name. According to the British medical journal The Lancet, the mercifully anonymous man spent an evening writing a report, periodically shifting position to avoid heat from the machine. The next day he woke to find himself blistered in a very sensitive place. He'd been well and truly fried.</p>
					<p>...</p>
					<p>What has led researchers to such measures? Basic physics: virtually all the power that flows into a chip comes out of it as waste heat. Today's standard-issue Pentium 4 throws off 100 watts, the same as the bulb in a child's Easy-Bake Oven and, as the hapless Swede learned, more than enough to cook meat. Divide by the area and you get a heat flux of around 30 watts per square centimeter - a power density several times higher than that of a kitchen hot plate.</p>
					<p>Addressing engineers at the 2001 IEEE International Solid State Circuits Conference, Patrick P. Gelsinger, the chief technology officer at Intel Corp., Santa Clara, Calif., said that if the trend toward ever more fiery chips were to continue unchecked, and surely it will not, microprocessors a decade from now will be pouring out as much power as the surface of the sun, some 10 000 W/cm<sup>2</sup>. "We need a fresh approach," Gelsinger concluded.</p>
					<p>HEAT HURTS PERFORMANCE because transistors run faster when they're cool rather than hot. That's why power-mad "overclockers," in search of an additional 20-30 percent of switching speed, clap custom heat sinks and cryogenic refrigeration systems onto the microprocessors in their souped-up PCs. Heat, or rather repeated cycling from hot to cool, also shortens the life of the chip. One way it does this is by inducing mechanical stress that can literally tear a chip apart. <font style="color: green;"><b>"Typically, it's not the silicon but the package that fails,"</b></font> says Avram Bar-Cohen, an IEEE fellow and professor of mechanical engineering at the University of Maryland in College Park. But the silicon suffers, too. Hot copper and aluminum interconnects on the chip are also more susceptible to disintegration in a phenomenon called electromigration, a serious reliability issue.</p>
					<p>... Garden-variety desktop computers today come with cooling equipment worth just US $3 to $5 - basically a fan and a heat sink.</p>
					<p>... researchers at Purdue University, West Lafayette, Ind., are developing a silent air-cooling technology with no moving parts. It relies on ionizing air, which it drags across the chip using electric fields.</p>
					<p>...</p>
					<p>CMOS set the clock back on the heat problem because,unlike transistors in bipolar technology, CMOS transistors draw power only when they switch from one state to another. "But by the late 1990s, we got to the same power dissipation levels we'd had with bipolars," says Bar-Cohen. "We had a 10-year free ride, using the technology we'd developed before. Now we need new ideas."</p>
					<p>...</p>
					<p>To improve the heat conductivity of goop by a factor of 10, in late 2002 the U.S. National Institute of Standards and Technology, in Gaithersburg, Md., put up half the money for a three-year, $7.2 million joint venture under the main sponsorship of General Electric Co., Fairfield, Conn. The focus is on fillers made of nanoscale structures, able to reach into all the crannies, says GE's Sandeep Tonapi, who declined to name his secret nanosauce.</p>
					<p>Meanwhile, an independent researcher who hadn't even heard of the federal project may just have found a solution that uses a decidedly unexotic nanofiller: soot. Deborah D.L. Chung, a materials engineer at the State University of New York, Buffalo, takes plain polyethylene glycol, a water-soluble emulsifier used in everything from toothpaste to printing inks, and fills it with carbon black - superfine soot, that is. This makes a thin paste that she says conducts heat 50 percent better than tin-based solders do and a lot better than any existing brand of goop does.</p>
					<p>"Everybody assumes that to get good paste, <font style="color: green;"><b>one must make its internal heat conductivity as high as possible, but I found out that what's important is spreadability,"</b></font> she says. "You can't use just any soot. You need the right grade - 30-nanometer particles that form agglomerations that look like clusters of grapes and are squishable, so that they flatten under compression to conform well to the surface topography" of the chip and heat sink.</p>
					<p>...</p>
					<p>The system, together with other heat-conducting concepts, was backed by DARPA in part because the <font style="color: green;"><b>military wants wearable computers that won't get fouled by mud or dust</b></font>, as they would if they depended on a fan. And what's good for your PC may be good for you, too, someday: a few of the concepts DARPA is studying may even pave the way to air-conditioned uniforms for desert commandos or urban firefighters, and air-conditioned clothing for hot, cranky city dwellers.</p>
					<p>...</p>
					<p>And nowhere is that energy more obvious than in the racks and racks of servers in large data centers. Chandrakant Patel, a distinguished technologist at Hewlett-Packard Laboratories, calculates that future big data centers, 1000 racks or larger, might need 10 MW to run the computers and a further 5 MW just to keep them cool enough to operate. He and his colleagues at H-P were awarded a patent last summer on technology that could make a sizable dent in that amount, saving as much as 25 percent on cooling costs.</p>
					<p>...</p>
				</blockquote>
</section>
				<section id="5.10">
				<h3>10. Platelet diffusion bonded heat exchanger</h3>
				<p><a href="http://www.vacets.org/vtic97/ttnguyen.htm">Diffusion bonding - an advanced material process for aerospace technology</a></p>
				<blockquote>
					<p>
						Thinh Nguyentat<br>
						Aerojet<br>
						...
					</p>
					<p>Platelet Diffusion Bonding and Applications</p>
					<p>... involves precise photo-etching or laser-cutting of thin platelets to the designed channel configurations. Subsequently, the etched platelets are arranged and stacked together and diffusion bonded at elevated temperature. The diffusion of the elements occurs at the platelet interface and results in a metallurgical bond joint. The bonded platelet panels are then formed and/or machined to the final hardware configuration.</p>
					<p>Platelet diffusion bonding process has been successfully applied to a wide range of engineering materials, such as stainless steels, copper, aluminum and titanium alloys, and refractory materials9,10,11,12. This process offers a <font style="color: green;"><b>significant cost reduction in the production of fluid or gas flow devices with extremely small flow channels</b></font>, particularly for aerospace and electronic applications.</p>
					<p>... the fabrication of a copper liner for a <font style="color: green;"><b>liquid rocket combustion chamber</b></font> which requires extensive cooling during operation in a severe hot gas environment13,14. Flat panels were fabricated by diffusion bonding of thin copper platelets with etched channels, and then formed to the chamber configuration. In the assembly process, hot isostatic diffusion bonding or brazing could be used to join the platelet panels to each other and to the structural support jacket of a high strength cast alloy (Fig. 3 ). Internal channels in the liner are designed to allow the flow of liquid hydrogen for cooling the combustion chamber.</p>
					<p>...</p>
				</blockquote>
</section>
				<section id="6">
				<h2>VLSI heat limiting Moore's law</h2>

				<p><a href="http://www.nwfusion.com/news/2004/0414inteltries.html">Intel tries to keep its cool</a></p>
				<blockquote>
					<p>
						By Sumner Lemon<br>
						IDG News Service, 04/14/04
					</p>
					<p>Steve Pawlowski, the director of Intel's Microprocessor Technology Lab, knows Intel has a heat problem.</p>
					<p>As processors like Intel's Pentium 4 have increased in performance and power, they've also become generators of intense heat. Pentium 4 chips currently generate more heat than a kitchen hotplate and the company's projections show the heat generated by its processors will increase sharply in the coming years, perhaps rivalling the core of a nuclear power plant, unless solutions can be found to the problem.</p>
					<p>...</p>
					<p>"As Intel keeps increasing the speed (of its processors) that generates more heat," said Dorothy Lai, a semiconductor analyst at Garner Group Hong Kong. "The problem is that you can make a very big heatsink but you cannot use a very big heatsink as the product (PCs) is getting smaller."</p>
					<p>...</p>
					<p>"There's a certain transfer coefficient between the die and the package," Pawlowski said. "<font style="color: green;"><b>If you can't come up with a better package that will allow that heat transfer to occur from the die, no matter what you do on the outside</b></font>, its going to be difficult." Die is a term that describes an unpackaged piece of silicon that contains an integrated circuit.</p>
					<p>...</p>
					<p>Microarchitecture is important because heat is not generated uniformly across a die. A single die contains many different electrical components, such as logic and memory, which have different activity levels and generate different levels of heat. For example, memory generally has a lower activity level than logic and therefore generates less heat. By the same turn, some logic components generate less heat than others.</p>
					<p>...</p>
					<p>"Confronted with a problem, engineers will become engineers and they'll come up with creative solutions," he said, noting that technologies such as MEMS (microelectromechanical systems) and <font style="color: green;"><b>microfluidics may offer solutions to the heat problem</b></font>.</p>
					<p>...</p>
				</blockquote>
</section>
				<section id="7">
				<h2>Typical supercomputer center requirements</h2>

				<p><a href="http://www.psc.edu/publicinfo/news/2001/terascale-10-01-01.html">Terascale Computing System Installed at Pittsburgh Supercomputing Center</a></p>
				<blockquote>
					<p>...</p>
					<p>The TCS requires 664 kilowatts of power, enough to power 500 homes. It produces heat equivalent to burning 169 pounds of coal an hour, much of which is used in heating the Westinghouse Energy Center. To cool the computer room, more than 600 feet of eight-inch cooling pipe, weighing 12 tons, circulate up to 900 gallons of water per minute, and twelve 30-ton air-handling units provide cooling capacity equivalent to 375 room air conditioners.
					</p><p>...</p>
				</blockquote>

				<p><a href="http://www.postgazette.com/healthscience/20011001terascale1001p3.asp">Pittsburgh supercomputer is complete, and scientists are champing at the bit to use it</a></p>
				<blockquote>
					<p>
						Monday, October 01, 2001<br>
						By Byron Spice, Science Editor, Post-Gazette<br>
						...
					</p>
					<p>"It's quite a piece of work," said Tony Woodman, technical program manager for Compaq. Since early August, Woodman has supervised crews working two, 10-hour shifts a day, seven days a week, to assemble the Terascale machine. "It's a cable nightmare," he added, with an <font style="color: green;"><b>estimated 6,000 cables -- together weighing more than four tons</b></font> -- snaking below the floor or in racks above the cabinets to connect the machines.</p>
					<p>The 150 cabinets are arranged in nine rows and kept as close together as possible so that the longest cable measures 33 meters. Designers were battling against the speed of light, which limits how fast signals can travel the cables. <font style="color: green;"><b>Every additional meter of cable would reduce the machine's throughput by 0.5 percent</b></font>, said Lynn Layman, the supercomputing center's facility manager.</p>
					<p>That's no big deal for some machines, but even half a percent can mean big losses for a $45 million machine that theoretically can perform 6 trillion calculations a second.</p>
					<p>...</p>
				</blockquote>
			</section>
			</article>

		</main>
	
</body>
</html>