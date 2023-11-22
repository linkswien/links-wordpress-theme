<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Links_Wien_Theme
 */

?>

	<footer id="footer-1" class="hide-for-subscriber">
		<div class="footer-form-container">
			<div id="mitmachen" class="headline-container">
				<h2>Werde jetzt aktiv bei LINKS:</h2>
				Bei LINKS sind Menschen aus allen Lebenslagen mit dabei. Gemeinsam kämpfen wir für ein gerechtes Wien.

				Bring dich ein und gestalte mit uns die Zukunft!

			</div>


			<div id="mauticform_wrapper_mitmachen" class="mauticform_wrapper">
				<form autocomplete="false" role="form" method="post" action="https://mautic.links.wien/form/submit?formId=8" id="mauticform_mitmachen" data-mautic-form="mitmachen" enctype="multipart/form-data" mitmachen>
					<div class="mauticform-error" id="mauticform_mitmachen_error"></div>
					<div class="mauticform-message" id="mauticform_mitmachen_message"></div>
					<div class="mauticform-innerform">

						
					<div class="mauticform-page-wrapper mauticform-page-1" data-mautic-form-page="1">

						<div class="mauticform-side-by-side">
							<input value="" class="mauticform-input mitmachen" type="text" id="mauticform_input_mitmachen_email2" placeholder="email2" name="mauticform[email2]">
							<style>#mauticform_input_mitmachen_email2{display:none;}</style>
							<div id="mauticform_mitmachen_vorname" class="mauticform-row mauticform-text mauticform-field-1 mauticform-required mitmachen" data-validate="vorname" data-validation-type="text">
								<label id="mauticform_label_mitmachen_vorname" for="mauticform_input_mitmachen_vorname" class="mauticform-label mitmachen">Vorname</label>
								<input placeholder="Vorname" id="mauticform_input_mitmachen_vorname" name="mauticform[vorname]" value="" class="mauticform-input mitmachen" type="text">
								<span class="mauticform-errormsg" style="display: none;">Bitte gib deinen Vornamen an!</span>
							</div>

							<div style="flex: 2;" id="mauticform_mitmachen_nachname" class="mauticform-row mauticform-text mauticform-field-2 mauticform-required mitmachen" data-validate="nachname" data-validation-type="text">
								<label id="mauticform_label_mitmachen_nachname" for="mauticform_input_mitmachen_nachname" class="mauticform-label mitmachen">Nachname</label>
								<input placeholder="Nachname" id="mauticform_input_mitmachen_nachname" name="mauticform[nachname]" value="" class="mauticform-input mitmachen" type="text">
								<span class="mauticform-errormsg" style="display: none;">Bitte gib deinen Nachnamen an!</span>
							</div>
						</div>

						<div class="mauticform-side-by-side">
							<div id="mauticform_mitmachen_email" class="mauticform-row mauticform-email mauticform-field-3 mauticform-required mitmachen" data-validate="email" data-validation-type="email">
								<label id="mauticform_label_mitmachen_email" for="mauticform_input_mitmachen_email" class="mauticform-label mitmachen">E-Mail</label>
								<input placeholder="deine@adresse.at" id="mauticform_input_mitmachen_email" name="mauticform[email]" value="" class="mauticform-input mitmachen" type="email">
								<span class="mauticform-errormsg" style="display: none;">Bitte gib deine E-Mail-Adresse an!</span>
							</div>

							<div id="mauticform_mitmachen_telefonnummer" class="mauticform-row mauticform-tel mauticform-field-4 mauticform-required mitmachen" data-validate="telefonnummer" data-validation-type="tel">
								<label id="mauticform_label_mitmachen_telefonnummer" for="mauticform_input_mitmachen_telefonnummer" class="mauticform-label mitmachen">Telefonnummer</label>
								<input placeholder="0678 90 123 45" id="mauticform_input_mitmachen_telefonnummer" name="mauticform[telefonnummer]" value="" class="mauticform-input mitmachen" type="tel">
								<span class="mauticform-errormsg" style="display: none;">Bitte gib deine Telefonnummer an!</span>
							</div>
						</div>

						<div id="mauticform_mitmachen_bezirk" class="mauticform-row mauticform-select mauticform-field-5 mauticform-required mitmachen" data-validate="bezirk" data-validation-type="select">
							<label id="mauticform_label_mitmachen_bezirk" for="mauticform_input_mitmachen_bezirk" class="mauticform-label mitmachen">Bezirk</label>
							<select id="mauticform_input_mitmachen_bezirk" name="mauticform[bezirk]" value="" class="mauticform-selectbox mitmachen">
								<option value="">Wähle deinen Bezirk aus…</option>                    <option value="1010">1010 – Innere Stadt</option>                    <option value="1020">1020 – Leopoldstadt</option>                    <option value="1030">1030 – Landstraße</option>                    <option value="1040">1040 – Wieden</option>                    <option value="1050">1050 – Margareten</option>                    <option value="1060">1060 – Mariahilf</option>                    <option value="1070">1070 – Neubau</option>                    <option value="1080">1080 – Josefstadt</option>                    <option value="1090">1090 – Alsergrund</option>                    <option value="1100">1100 – Favoriten</option>                    <option value="1110">1110 – Simmering</option>                    <option value="1120">1120 – Meidling</option>                    <option value="1130">1130 – Hietzing</option>                    <option value="1140">1140 – Penzing</option>                    <option value="1150">1150 – Rudolfsheim-Fünfhaus</option>                    <option value="1160">1160 – Ottakring</option>                    <option value="1170">1170 – Hernals</option>                    <option value="1180">1180 – Währing</option>                    <option value="1190">1190 – Döbling</option>                    <option value="1200">1200 – Brigittenau</option>                    <option value="1210">1210 – Floridsdorf</option>                    <option value="1220">1220 – Donaustadt</option>                    <option value="1230">1230 – Liesing</option>
							</select>
							<span class="mauticform-errormsg" style="display: none;">Bitte wähle deinen Bezirk aus!</span>
						</div>

						<div id="mauticform_mitmachen_wofur_interessierst_du_di" class="mauticform-row mauticform-checkboxgrp mauticform-field-6" style="margin-top: 3rem;">
							<label class="mauticform-label" for="mauticform_checkboxgrp_checkbox_wofur_interessierst_du_di_Antirassismus1">Wofür interessierst du dich?</label>
								<div class="mauticform-side-by-side">
									<label id="mauticform_checkboxgrp_label_wofur_interessierst_du_di_igantirassismus0" for="mauticform_checkboxgrp_checkbox_wofur_interessierst_du_di_igantirassismus0" class="mauticform-checkboxgrp-label">
										<input class="mauticform-checkboxgrp-checkbox" name="mauticform[wofur_interessierst_du_di][]" id="mauticform_checkboxgrp_checkbox_wofur_interessierst_du_di_igantirassismus0" type="checkbox" value="ig-antirassismus">
										<p>Antirassismus</p>
									</label>
									<label id="mauticform_checkboxgrp_label_wofur_interessierst_du_di_igbildung1" for="mauticform_checkboxgrp_checkbox_wofur_interessierst_du_di_igbildung1" class="mauticform-checkboxgrp-label">
										<input class="mauticform-checkboxgrp-checkbox" name="mauticform[wofur_interessierst_du_di][]" id="mauticform_checkboxgrp_checkbox_wofur_interessierst_du_di_igbildung1" type="checkbox" value="ig-bildung">
										<p>Bildung</p>
									</label>
									<label id="mauticform_checkboxgrp_label_wofur_interessierst_du_di_igflint2" for="mauticform_checkboxgrp_checkbox_wofur_interessierst_du_di_igflint2" class="mauticform-checkboxgrp-label">
										<input class="mauticform-checkboxgrp-checkbox" name="mauticform[wofur_interessierst_du_di][]" id="mauticform_checkboxgrp_checkbox_wofur_interessierst_du_di_igflint2" type="checkbox" value="ig-flint">
										<p>FLINTA <small>Frauen, Lesben, Inter, Non-binary, Trans, Agender</small></p>
									</label>
									<label id="mauticform_checkboxgrp_label_wofur_interessierst_du_di_iggewerkschaft3" for="mauticform_checkboxgrp_checkbox_wofur_interessierst_du_di_iggewerkschaft3" class="mauticform-checkboxgrp-label">
										<input class="mauticform-checkboxgrp-checkbox" name="mauticform[wofur_interessierst_du_di][]" id="mauticform_checkboxgrp_checkbox_wofur_interessierst_du_di_iggewerkschaft3" type="checkbox" value="ig-gewerkschaft">
										<p>Gewerkschaftsarbeit</p>
									</label>
									<label id="mauticform_checkboxgrp_label_wofur_interessierst_du_di_igjugend4" for="mauticform_checkboxgrp_checkbox_wofur_interessierst_du_di_igjugend4" class="mauticform-checkboxgrp-label">
										<input class="mauticform-checkboxgrp-checkbox" name="mauticform[wofur_interessierst_du_di][]" id="mauticform_checkboxgrp_checkbox_wofur_interessierst_du_di_igjugend4" type="checkbox" value="ig-jugend">
										<p>Jugend</p>
									</label>
									<label id="mauticform_checkboxgrp_label_wofur_interessierst_du_di_igkultur5" for="mauticform_checkboxgrp_checkbox_wofur_interessierst_du_di_igkultur5" class="mauticform-checkboxgrp-label">
										<input class="mauticform-checkboxgrp-checkbox" name="mauticform[wofur_interessierst_du_di][]" id="mauticform_checkboxgrp_checkbox_wofur_interessierst_du_di_igkultur5" type="checkbox" value="ig-kultur">
										<p>Kunst &amp; Kultur</p>
									</label>
									<label id="mauticform_checkboxgrp_label_wofur_interessierst_du_di_iglgbtqia6" for="mauticform_checkboxgrp_checkbox_wofur_interessierst_du_di_iglgbtqia6" class="mauticform-checkboxgrp-label">
										<input class="mauticform-checkboxgrp-checkbox" name="mauticform[wofur_interessierst_du_di][]" id="mauticform_checkboxgrp_checkbox_wofur_interessierst_du_di_iglgbtqia6" type="checkbox" value="ig-lgbtqia">
										<p>LGBTQIA+</p>
									</label>
									<label id="mauticform_checkboxgrp_label_wofur_interessierst_du_di_igmarxismus7" for="mauticform_checkboxgrp_checkbox_wofur_interessierst_du_di_igmarxismus7" class="mauticform-checkboxgrp-label">
										<input class="mauticform-checkboxgrp-checkbox" name="mauticform[wofur_interessierst_du_di][]" id="mauticform_checkboxgrp_checkbox_wofur_interessierst_du_di_igmarxismus7" type="checkbox" value="ig-marxismus">
										<p>Marxismus</p>
									</label>
									<label id="mauticform_checkboxgrp_label_wofur_interessierst_du_di_igumwelt8" for="mauticform_checkboxgrp_checkbox_wofur_interessierst_du_di_igumwelt8" class="mauticform-checkboxgrp-label">
										<input class="mauticform-checkboxgrp-checkbox" name="mauticform[wofur_interessierst_du_di][]" id="mauticform_checkboxgrp_checkbox_wofur_interessierst_du_di_igumwelt8" type="checkbox" value="ig-umwelt">
										<p>Umwelt</p>
									</label>
									<label id="mauticform_checkboxgrp_label_wofur_interessierst_du_di_igverkehr9" for="mauticform_checkboxgrp_checkbox_wofur_interessierst_du_di_igverkehr9" class="mauticform-checkboxgrp-label">
										<input class="mauticform-checkboxgrp-checkbox" name="mauticform[wofur_interessierst_du_di][]" id="mauticform_checkboxgrp_checkbox_wofur_interessierst_du_di_igverkehr9" type="checkbox" value="ig-verkehr">
										<p>Verkehr</p>
									</label>
									<label id="mauticform_checkboxgrp_label_wofur_interessierst_du_di_igwohnen10" for="mauticform_checkboxgrp_checkbox_wofur_interessierst_du_di_igwohnen10" class="mauticform-checkboxgrp-label">
										<input class="mauticform-checkboxgrp-checkbox" name="mauticform[wofur_interessierst_du_di][]" id="mauticform_checkboxgrp_checkbox_wofur_interessierst_du_di_igwohnen10" type="checkbox" value="ig-wohnen">
										<p>Wohnen</p>
									</label>
								</div>
							<span class="mauticform-errormsg" style="display: none;"></span>
						</div>

						<div id="mauticform_mitmachen_was_willst_du_tun" class="mauticform-row mauticform-text mauticform-field-7 mitmachen">
							<label id="mauticform_label_mitmachen_was_willst_du_tun" for="mauticform_input_mitmachen_was_willst_du_tun" class="mauticform-label mitmachen">Was willst du tun?</label>
							<textarea placeholder="Platz für deine Ideen & Anliegen" id="mauticform_input_mitmachen_was_willst_du_tun" name="mauticform[was_willst_du_tun]" class="mauticform-textarea mitmachen"></textarea>
							<span class="mauticform-errormsg" style="display: none;"></span>
						</div>

						<div id="mauticform_mitmachen_bin_dabei" class="mauticform-row mauticform-button-wrapper mauticform-field-8 mitmachen">
							<button type="submit" name="mauticform[bin_dabei]" id="mauticform_input_mitmachen_bin_dabei" value="" class="mauticform-button btn btn-default mitmachen">Bin dabei*</button>
						</div>
						<div id="mauticform_mitmachen_datenschutz" class="mauticform-row mauticform-freehtml mauticform-field-9 mitmachen">
							<div id="mauticform_input_mitmachen_datenschutz" name="mauticform[datenschutz]" value="" class="mauticform-freehtml mitmachen">
								*Ich stimme der <span style="text-decoration: underline;"><a href="https://links.wien/impressum/">Datenschutzerklärung</a></span> zu.
							</div>
						</div>

						</div>
					</div>

					<input type="hidden" name="mauticform[formId]" id="mauticform_mitmachen_id" value="8">
					<input type="hidden" name="mauticform[return]" id="mauticform_mitmachen_return" value="">
					<input type="hidden" name="mauticform[formName]" id="mauticform_mitmachen_name" value="mitmachen">

				</form>
			</div>
		</div>
	</footer>

	<footer id="footer-2" class="widget-area">

		<section>
		<img
				src="<?php echo get_template_directory_uri() . '/img/links_logo_light.svg'; ?>"
				width="160"
				height="62"
				alt="<?php bloginfo( 'name' ); ?>"
			/><br/>
			<a href="mailto:kontakt@links.wien"> kontakt@links.wien </a> <br/>
			<a class="social-media" href="https://www.facebook.com/linkswien">
			<svg viewBox="0 0 14 29"><path fill-rule="evenodd" clip-rule="evenodd" d="M12.5827 14.8783H8.63563V28.2863H2.78295V14.8783H0V9.62934H2.78295V6.233C2.78295 3.80405 3.87623 0 8.68772 0L13.0222 0.0197677V5.11489H9.87698C9.36078 5.11489 8.63563 5.38732 8.63563 6.54558V9.6349H13.0942L12.5827 14.8783Z" fill="currentColor"/></svg>

			</a>
			<a class="social-media" href="https://twitter.com/linkswien">
			<svg viewBox="0 0 27 23"><path fill-rule="evenodd" clip-rule="evenodd" d="M26.8984 3.30989C25.9349 3.75393 24.8984 4.05489 23.8122 4.18934C24.9215 3.49738 25.773 2.40332 26.175 1.09772C25.1368 1.73849 23.9865 2.2035 22.7633 2.45389C21.7826 1.36784 20.3862 0.689453 18.8405 0.689453C15.8735 0.689453 13.4674 3.1921 13.4674 6.27755C13.4674 6.71542 13.5154 7.14219 13.6073 7.55169C9.14197 7.31857 5.183 5.09345 2.53321 1.71197C2.07013 2.53714 1.8051 3.49738 1.8051 4.52175C1.8051 6.4601 2.75438 8.17149 4.19519 9.17366C3.3147 9.14406 2.48578 8.89306 1.76182 8.47369C1.76123 8.49712 1.76122 8.52117 1.76122 8.54461C1.76122 11.2526 3.61412 13.5104 6.0718 14.0235C5.62118 14.1518 5.14624 14.2203 4.65648 14.2203C4.30962 14.2203 3.97343 14.1857 3.64554 14.1204C4.32919 16.3399 6.31312 17.9557 8.66408 18.0008C6.82482 19.5006 4.50884 20.3936 1.99068 20.3936C1.55844 20.3936 1.12975 20.3671 0.709961 20.3153C3.08701 21.9009 5.91171 22.8266 8.94513 22.8266C18.828 22.8266 24.2332 14.3116 24.2332 6.9251C24.2332 6.68335 24.2272 6.44221 24.2171 6.20231C25.2672 5.41476 26.178 4.43047 26.8984 3.30989Z" fill="currentColor"/></svg>
			</a>
			<a class="social-media" href="https://www.instagram.com/linkswien">
			<svg viewBox="0 0 28 29"><path fill-rule="evenodd" clip-rule="evenodd" d="M25.7774 20.5457C25.7774 23.6209 23.3645 26.1138 20.3886 26.1138H8.11277C5.13681 26.1138 2.72391 23.6209 2.72391 20.5457V7.8636C2.72391 4.78839 5.13681 2.29611 8.11277 2.29611H20.3886C23.3645 2.29611 25.7774 4.78839 25.7774 7.8636V20.5457ZM20.4195 0H8.08182C3.89584 0 0.501465 3.50628 0.501465 7.83163V20.5783C0.501465 24.9037 3.89584 28.4093 8.08182 28.4093H20.4195C24.6055 28.4093 27.9999 24.9037 27.9999 20.5783V7.83163C27.9999 3.50628 24.6055 0 20.4195 0Z" fill="currentColor"/><path fill-rule="evenodd" clip-rule="evenodd" d="M14.2508 19.0875C11.6403 19.0875 9.52503 16.9021 9.52503 14.2051C9.52503 11.508 11.6403 9.32135 14.2508 9.32135C16.8619 9.32135 18.9772 11.508 18.9772 14.2051C18.9772 16.9021 16.8619 19.0875 14.2508 19.0875ZM14.2508 6.71777C10.2488 6.71777 7.00439 10.0697 7.00439 14.2051C7.00439 18.3398 10.2488 21.6917 14.2508 21.6917C18.2535 21.6917 21.4979 18.3398 21.4979 14.2051C21.4979 10.0697 18.2535 6.71777 14.2508 6.71777Z" fill="currentColor"/><path fill-rule="evenodd" clip-rule="evenodd" d="M23.3681 6.46955C23.3681 7.39687 22.6408 8.14832 21.7433 8.14832C20.8451 8.14832 20.1172 7.39687 20.1172 6.46955C20.1172 5.54161 20.8451 4.78955 21.7433 4.78955C22.6408 4.78955 23.3681 5.54161 23.3681 6.46955Z" fill="currentColor"/></svg>
			</a><br>
			<a href="https://spenden.links.wien" class="cta-footer"> Jetzt unterstützen! </a>


		</section>

	<?php dynamic_sidebar( 'footer-2' ); ?>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
