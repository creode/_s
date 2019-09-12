var creodeWordpressBaseThemeManageGutenbergBlocks = {

    blocksToRemove: [],

    init: function() {
        if(typeof wp.blocks != 'undefined') {
            this.removeBlocks();
        }
    },

        removeBlocks: function() {
            for(var i=0; i<this.blocksToRemove.length; i=i+1) {
                wp.blocks.unregisterBlockType(this.blocksToRemove[i]);
            }
        }

};

wp.domReady( function() { 
    creodeWordpressBaseThemeManageGutenbergBlocks.init();
});