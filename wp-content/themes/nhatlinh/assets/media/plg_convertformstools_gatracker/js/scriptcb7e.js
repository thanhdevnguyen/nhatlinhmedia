!(function(window, document) {
	'use strict';

	document.addEventListener('ConvertFormsInit', function() {
		var ga_settings = Joomla.getOptions('com_convertforms').gatracker,
			forms = ga_settings.forms,
			tracker = new GoogleAnalyticsTracker(forms, ga_settings.options);

		// Loop through all Google Analytics enabled forms
		// Note: Refactor by listening to the document-based event instead.
		Object.keys(forms).forEach(function(form_id) {
			document.querySelectorAll("#cf_" + form_id).forEach(function(form) {

				// Track the Load event on page load
				tracker.track(form_id, "Load");

				// Track the Impression event
				form.addEventListener("impression", function(event) {
					tracker.track(form_id, "Impression");
				})

				// Track the Conversion event
				form.addEventListener("success", function() {
					tracker.track(form_id, "Conversion");
				})

				// Track the Error event 
				form.addEventListener("error", function() {
					tracker.track(form_id, "Error");
				})
			});
		});

		// Make tracker object public so we can track custom events.
		window.ConvertForms.GoogleAnalyticsTracker = tracker;
	});

	/**
	 * The Convert Forms Google Analytics Tracker Helper
	 * 
	 * @param string google_analytics_id
	 * @param string event_category
	 */
	function GoogleAnalyticsTracker(forms, options) {
		/**	
		 * The list of forms that can be tracked
		 */
		this.forms = forms;

		/**
		 *  The options object
		 */
		this.options = options;

		/**
		 * Refer to the actual object
		 */
		var self = this;

		/**
		 *  Track form event in Google Analytics
		 *
		 *  @param   String  form_id    	  The form's ID
		 *  @param   String  event_action     The Event Action: Conversion, Load
		 *
		 *  @return  void
		 */
		this.track = function(form_id, event_action, callback) {
			var form = this.forms[form_id];

			if (typeof form === 'undefined') {
				console.error("Form #" + form_id + " not found");

				if (typeof callback === "function") {
					callback(false);
				}
			}

			this.gaLoad(function() {
				gaCF('send', 'event', {
					'eventCategory': self.options.event_category,
					'eventAction': event_action,
					'eventLabel': "Form #" + form_id + " - " + form.name,
					'hitCallback': function() {
						if (typeof callback === "function") {
							callback(true);
						}
					}
				});
			});
		}

		/**
		 *  Load a namespaced Universal Google Analytics instance once.
		 *
		 *  @param   Function  callback  The function to be called once the GA is loaded
		 *
		 *  @return  void
		 */
		this.gaLoad = function(callback) {
			// Skip loading if it's already loaded.
			if (typeof gaCF !== "undefined") {
				gaCF(function() {
					callback();
				});

				return;
			}

			// Let's load GA script.
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','../../../www.google-analytics.com/analytics.js','gaCF');

			gaCF('create', this.options.tracking_id, 'auto');  
			gaCF('require', 'displayfeatures');

			gaCF(function() {
				callback();
			});
		}
	}
})(window, document);