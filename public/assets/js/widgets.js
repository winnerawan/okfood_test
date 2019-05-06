$("button[data-close='card-dismissable']").on('click', function(){
    $('#dismissable').remove();
});        
window.onload = function onLoad() {
    var fixvalue = 20;
    var target;
    var circle = new ProgressBar.Circle('#progress-circle', {
        color: '#ff5254',
        duration: 3000,
        easing: 'easeInOut',
        strokeWidth: 5,
        fill: '#fff',
        text: {
            value: '0'
        },
        step: function (state, bar) {
            bar.setText((bar.value() * 100).toFixed(0));
            target = bar.value();
            if ((target * 100).toFixed(0) == fixvalue) {
                circle.stop();
            }
        }
        // text: {
        //     // Initial value for text.
        //     // Default: null
        //     value: 'Text',
        //     // Class name for text element.
        //     // Default: 'progressbar-text'
        //     className: 'progressbar__label',
        //     // Inline CSS styles for the text element.
        //     // If you want to modify all CSS your self, set null to disable
        //     // all default styles.
        //     // If the style option contains values, container is automatically
        //     // set to position: relative. You can disable behavior this with
        //     // autoStyleContainer: false
        //     // If you specify anything in this object, none of the default styles
        //     // apply
        //     // Default: object speficied below
        //     style: {
        //         // Text color.
        //         // Default: same as stroke color (options.color)
        //         color: '#f00',
        //         position: 'absolute',
        //         left: '50%',
        //         top: '50%',
        //         padding: 0,
        //         margin: 0,
        //         // You can specify styles which will be browser prefixed
        //         transform: {
        //             prefix: true,
        //             value: 'translate(-50%, -50%)'
        //         }
        //     },
    
        //     // Only effective if the text.style is not null
        //     // By default position: relative is applied to container if text
        //     // is set. Setting this to false disables that feature.
        //     autoStyleContainer: true,
    
        //     // Only effective if the shape is SemiCircle.
        //     // If true, baseline for text is aligned with bottom of
        //     // the SVG canvas. If false, bottom line of SVG canvas
        //     // is in the center of text.
        //     // Default: true
        //     alignToBottom: true
        // },
    });
    circle.animate(1);
    
    var fixvalue2 = 40;
    var target2;    
    var circle2 = new ProgressBar.Circle('#progress-circle2', {
        color: '#ff5254',
        duration: 3000,
        easing: 'easeInOut',
        strokeWidth: 5,
        fill: '#fff',
        text: {
            value: '0'
        },
        step: function (state, bar) {
            bar.setText((bar.value() * 100).toFixed(0));
            target2 = bar.value();
            if ((target2 * 100).toFixed(0) == fixvalue2) {
                circle2.stop();
            }
        }
        // text: {
        //     // Initial value for text.
        //     // Default: null
        //     value: 'Text',
        //     // Class name for text element.
        //     // Default: 'progressbar-text'
        //     className: 'progressbar__label',
        //     // Inline CSS styles for the text element.
        //     // If you want to modify all CSS your self, set null to disable
        //     // all default styles.
        //     // If the style option contains values, container is automatically
        //     // set to position: relative. You can disable behavior this with
        //     // autoStyleContainer: false
        //     // If you specify anything in this object, none of the default styles
        //     // apply
        //     // Default: object speficied below
        //     style: {
        //         // Text color.
        //         // Default: same as stroke color (options.color)
        //         color: '#f00',
        //         position: 'absolute',
        //         left: '50%',
        //         top: '50%',
        //         padding: 0,
        //         margin: 0,
        //         // You can specify styles which will be browser prefixed
        //         transform: {
        //             prefix: true,
        //             value: 'translate(-50%, -50%)'
        //         }
        //     },
    
        //     // Only effective if the text.style is not null
        //     // By default position: relative is applied to container if text
        //     // is set. Setting this to false disables that feature.
        //     autoStyleContainer: true,
    
        //     // Only effective if the shape is SemiCircle.
        //     // If true, baseline for text is aligned with bottom of
        //     // the SVG canvas. If false, bottom line of SVG canvas
        //     // is in the center of text.
        //     // Default: true
        //     alignToBottom: true
        // },
    });
    circle2.animate(1);
    

    var fixvalue3 = 60; 
    var target3;    
    var circle3 = new ProgressBar.Circle('#progress-circle3', {
        color: '#ff5254',
        duration: 3000,
        easing: 'easeInOut',
        strokeWidth: 5,
        fill: '#fff',
        text: {
            value: '0'
        },
        step: function (state, bar) {
            bar.setText((bar.value() * 100).toFixed(0));
            target3 = bar.value();
            if ((target3 * 100).toFixed(0) == fixvalue3) {
                circle3.stop();
            }
        }
        // text: {
        //     // Initial value for text.
        //     // Default: null
        //     value: 'Text',
        //     // Class name for text element.
        //     // Default: 'progressbar-text'
        //     className: 'progressbar__label',
        //     // Inline CSS styles for the text element.
        //     // If you want to modify all CSS your self, set null to disable
        //     // all default styles.
        //     // If the style option contains values, container is automatically
        //     // set to position: relative. You can disable behavior this with
        //     // autoStyleContainer: false
        //     // If you specify anything in this object, none of the default styles
        //     // apply
        //     // Default: object speficied below
        //     style: {
        //         // Text color.
        //         // Default: same as stroke color (options.color)
        //         color: '#f00',
        //         position: 'absolute',
        //         left: '50%',
        //         top: '50%',
        //         padding: 0,
        //         margin: 0,
        //         // You can specify styles which will be browser prefixed
        //         transform: {
        //             prefix: true,
        //             value: 'translate(-50%, -50%)'
        //         }
        //     },
    
        //     // Only effective if the text.style is not null
        //     // By default position: relative is applied to container if text
        //     // is set. Setting this to false disables that feature.
        //     autoStyleContainer: true,
    
        //     // Only effective if the shape is SemiCircle.
        //     // If true, baseline for text is aligned with bottom of
        //     // the SVG canvas. If false, bottom line of SVG canvas
        //     // is in the center of text.
        //     // Default: true
        //     alignToBottom: true
        // },
    });
    circle3.animate(1);

    var fixvalue4 = 80; 
    var target4;    
    var circle4 = new ProgressBar.Circle('#progress-circle4', {
        color: '#ff5254',
        duration: 3000,
        easing: 'easeInOut',
        strokeWidth: 5,
        fill: '#fff',
        text: {
            value: '0'
        },
        step: function (state, bar) {
            bar.setText((bar.value() * 100).toFixed(0));
            target4 = bar.value();
            if ((target4 * 100).toFixed(0) == fixvalue4) {
                circle4.stop();
            }
        }
        // text: {
        //     // Initial value for text.
        //     // Default: null
        //     value: 'Text',
        //     // Class name for text element.
        //     // Default: 'progressbar-text'
        //     className: 'progressbar__label',
        //     // Inline CSS styles for the text element.
        //     // If you want to modify all CSS your self, set null to disable
        //     // all default styles.
        //     // If the style option contains values, container is automatically
        //     // set to position: relative. You can disable behavior this with
        //     // autoStyleContainer: false
        //     // If you specify anything in this object, none of the default styles
        //     // apply
        //     // Default: object speficied below
        //     style: {
        //         // Text color.
        //         // Default: same as stroke color (options.color)
        //         color: '#f00',
        //         position: 'absolute',
        //         left: '50%',
        //         top: '50%',
        //         padding: 0,
        //         margin: 0,
        //         // You can specify styles which will be browser prefixed
        //         transform: {
        //             prefix: true,
        //             value: 'translate(-50%, -50%)'
        //         }
        //     },
    
        //     // Only effective if the text.style is not null
        //     // By default position: relative is applied to container if text
        //     // is set. Setting this to false disables that feature.
        //     autoStyleContainer: true,
    
        //     // Only effective if the shape is SemiCircle.
        //     // If true, baseline for text is aligned with bottom of
        //     // the SVG canvas. If false, bottom line of SVG canvas
        //     // is in the center of text.
        //     // Default: true
        //     alignToBottom: true
        // },
    });
    circle4.animate(1);
};
