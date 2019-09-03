var creodeHeaderSearchForm = {

    elements: {},

    init: function() {
        this.getElements();
        if(this.elements.toggles.length) {
            this.setToggleEvents();
        }
    },

        getElements: function() {
            this.elements.toggles = jQuery('.header__search-form-toggle');
        },

        setToggleEvents: function() {
            var _self = this;

            _self.elements.toggles.on('click', function() {
                var toggle = jQuery(this);

                _self.toggle(toggle);
            });
        },

        toggle: function(toggleButton) {
            var form = toggleButton.parent().children('.header__search-form');

            if(form.length) {
                toggleButton.toggleClass('header__search-form-toggle--open');
                if(toggleButton.hasClass('header__search-form-toggle--open')) {
                    form.addClass('header__search-form--open');
                    toggleButton.trigger('toggle-open');
                } else {
                    form.removeClass('header__search-form--open');
                    toggleButton.trigger('toggle-close');
                }
                toggleButton.trigger('toggle');
            }
        }

};

jQuery(document).on('ready', function() {
	creodeHeaderSearchForm.init();
});