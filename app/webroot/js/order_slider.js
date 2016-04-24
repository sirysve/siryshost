(
        function ($, undefined) {
            $.ui.slider.prototype.options =
                    $.extend({},
                            $.ui.slider.prototype.options, {
                                paddingMin: 0,
                                paddingMax: 0
                            }
                    );

            $.ui.slider.prototype._refreshValue =
                    function () {
                        var
                                oRange = this.options.range,
                                o = this.options,
                                self = this,
                                animate = (!this._animateOff) ? o.animate : false,
                                valPercent,
                                _set = {},
                                elementWidth,
                                elementHeight,
                                paddingMinPercent,
                                paddingMaxPercent,
                                paddedBarPercent,
                                lastValPercent,
                                value,
                                valueMin,
                                valueMax;

                        if (self.orientation === "horizontal") {
                            elementWidth = this.element.outerWidth();
                            paddingMinPercent = o.paddingMin * 100 / elementWidth;
                            paddedBarPercent = (elementWidth - (o.paddingMin + o.paddingMax)) * 100 / elementWidth;
                        } else {
                            elementHeight = this.element.outerHeight();
                            paddingMinPercent = o.paddingMin * 100 / elementHeight;
                            paddedBarPercent = (elementHeight - (o.paddingMin + o.paddingMax)) * 100 / elementHeight;
                        }

                        if (this.options.values && this.options.values.length) {
                            this.handles.each(function (i, j) {
                                valPercent =
                                        ((self.values(i) - self._valueMin()) / (self._valueMax() - self._valueMin()) * 100) * paddedBarPercent / 100 + paddingMinPercent;
                                _set[self.orientation === "horizontal" ? "left" : "bottom"] = valPercent + "%";
                                $(this).stop(1, 1)[animate ? "animate" : "css"](_set, o.animate);
                                if (self.options.range === true) {
                                    if (self.orientation === "horizontal") {
                                        if (i === 0) {
                                            self.range.stop(1, 1)[animate ? "animate" : "css"]({
                                                left: valPercent + "%"
                                            }, o.animate);
                                        }
                                        if (i === 1) {
                                            self.range[animate ? "animate" : "css"]({
                                                width: (valPercent - lastValPercent) + "%"
                                            }, {
                                                queue: false,
                                                duration: o.animate
                                            });
                                        }
                                    } else {
                                        if (i === 0) {
                                            self.range.stop(1, 1)[animate ? "animate" : "css"]({
                                                bottom: (valPercent) + "%"
                                            }, o.animate);
                                        }
                                        if (i === 1) {
                                            self.range[animate ? "animate" : "css"]({
                                                height: (valPercent - lastValPercent) + "%"
                                            }, {
                                                queue: false,
                                                duration: o.animate
                                            });
                                        }
                                    }
                                }
                                lastValPercent = valPercent;
                            });
                        } else {
                            value = this.value();
                            valueMin = this._valueMin();
                            valueMax = this._valueMax();
                            valPercent =
                                    ((valueMax !== valueMin) ? (value - valueMin) / (valueMax - valueMin) * 100 : 0) * paddedBarPercent / 100 + paddingMinPercent;

                            _set[self.orientation === "horizontal" ? "left" : "bottom"] = valPercent + "%";

                            this.handle.stop(1, 1)[animate ? "animate" : "css"](_set, o.animate);

                            if (oRange === "min" && this.orientation === "horizontal") {
                                this.range.stop(1, 1)[animate ? "animate" : "css"]({
                                    width: valPercent + "%"
                                }, o.animate);
                            }
                            if (oRange === "max" && this.orientation === "horizontal") {
                                this.range[animate ? "animate" : "css"]({
                                    width: (100 - valPercent) + "%"
                                }, {
                                    queue: false,
                                    duration: o.animate
                                });
                            }
                            if (oRange === "min" && this.orientation === "vertical") {
                                this.range.stop(1, 1)[animate ? "animate" : "css"]({
                                    height: valPercent + "%"
                                }, o.animate);
                            }
                            if (oRange === "max" && this.orientation === "vertical") {
                                this.range[animate ? "animate" : "css"]({
                                    height: (100 - valPercent) + "%"
                                }, {
                                    queue: false,
                                    duration: o.animate
                                });
                            }
                        }
                    };

            $.ui.slider.prototype._normValueFromMouse =
                    function (position) {
                        var
                                o = this.options,
                                pixelTotal,
                                pixelMouse,
                                percentMouse,
                                valueTotal,
                                valueMouse;

                        if (this.orientation === "horizontal") {
                            pixelTotal = this.elementSize.width - (o.paddingMin + o.paddingMax);
                            pixelMouse = position.x - this.elementOffset.left - o.paddingMin - (this._clickOffset ? this._clickOffset.left : 0);
                        } else {
                            pixelTotal = this.elementSize.height - (o.paddingMin + o.paddingMax);
                            pixelMouse = position.y - this.elementOffset.top - o.paddingMin - (this._clickOffset ? this._clickOffset.top : 0);
                        }

                        percentMouse = (pixelMouse / pixelTotal);
                        if (percentMouse > 1) {
                            percentMouse = 1;
                        }
                        if (percentMouse < 0) {
                            percentMouse = 0;
                        }
                        if (this.orientation === "vertical") {
                            percentMouse = 1 - percentMouse;
                        }

                        valueTotal = this._valueMax() - this._valueMin();
                        valueMouse = this._valueMin() + percentMouse * valueTotal;

                        return this._trimAlignValue(valueMouse);
                    };
        }
)(jQuery);
var vpsnameval = new Array('VPS1', 'VPS2', 'VPS3', 'VPS4', 'VPS5', 'VPS6'); //VPS plan names
var memoryval = new Array('512 MB', '768 MB', '1 GB', '1.5 GB', '2 GB', '2.5 GB'); //Memory array per plan
var cpuval = new Array('0.88 GHz', '1.17 GHz', '1.47 GHz', '1.96 GHz', '2.43 GHz', '3.20 GHz'); //CPU array per plan
var diskspaceval = new Array('20 GB', '30 GB', '40 GB', '60 GB', '80 GB', '100 GB'); //Disk Space array per plan
var bandwidthval = new Array('500 GB', '600 GB', '800 GB', '1000 GB', '1500 GB', '2000 GB'); //Bandwidth array per plan
var decimalval = new Array('.99', '.99', '.99', '.99', '.99', '.99'); //Decimal array per plan

var priceval = new Array('16', '18', '22', '26', '33', '41'); //Price array per plan
var urlval = new Array('1', '2', '3', '4', '5', '6'); //WHMCS pid array per plan

var finalurl = 'http://domain.com/cart.php?a=add&pid='; //Update "domain.com" with your WHMCS installation URL

var starting_point = 1; //Where the slider stops on first page load. Ideal to sign a plan as popular.

$(document).ready(function () {

    $("#vps-slider").slider({
        range: 'min',
        animate: true,
        min: 1,
        max: 6, //Update this if you less or more plans
        paddingMin: 0,
        paddingMax: 0,
        slide: function (event, ui) {
            $('.vps-prices-container #vps_name_option span.how_much').html(vpsnameval[ui.value - 1]);
            $('.vps-prices-container #disk_space_option span.how_much').html(diskspaceval[ui.value - 1]);
            $('.vps-prices-container #memory_option span.how_much').html(memoryval[ui.value - 1]);
            $('.vps-prices-container #cpu_option span.how_much').html(cpuval[ui.value - 1]);
            $('.vps-prices-container #bandwidth_option span.how_much').html(bandwidthval[ui.value - 1]);
            $('.vps-prices-container #price_amount').html(priceval[ui.value - 1]);
            $('.vps-prices-container a.order-vps').attr('href', finalurl + urlval[ui.value - 1]);

            $('.vps-prices-container #decimal').html(decimalval[ui.value - 1] + ' Mensual');

        },
        change: function (event, ui) {
            $('.vps-prices-container #vps_name_option span.how_much').html(vpsnameval[ui.value - 1]);
            $('.vps-prices-container #disk_space_option span.how_much').html(diskspaceval[ui.value - 1]);
            $('.vps-prices-container #memory_option span.how_much').html(memoryval[ui.value - 1]);
            $('.vps-prices-container #cpu_option span.how_much').html(cpuval[ui.value - 1]);
            $('.vps-prices-container #bandwidth_option span.how_much').html(bandwidthval[ui.value - 1]);
            $('.vps-prices-container #price_amount').html(priceval[ui.value - 1]);
            $('.vps-prices-container a.order-vps').attr('href', finalurl + urlval[ui.value - 1]);
            $('.vps-prices-container #decimal').html(decimalval[ui.value - 1] + ' Mensual');
        }

    });


    $("#amount").val("$" + $("#vps-slider").slider("value"));
    $('#vps-slider').slider('value', starting_point);
    $('.vps-plan').click(function () {
        tt_amount = parseInt(this.id.slice(5)) + 1;
        $('#vps-slider').slider('how_much', tt_amount);
    });
});