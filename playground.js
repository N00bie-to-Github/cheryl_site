var UNIT_REGEX = /(\d+\.?\d*)\s*('|"|[a-z]+(\^\d+)?)/gi;

function Measurement(args) {
    this.inputString = args.inputString;
    this.value = typeof args.value !== 'undefined' ? args.value : 0;
    this.system = undefined;
    this.dimension = args.dimension;
    // Defaults to the metric system
    this.system = args.system || 'metric';
}

Measurement.prototype.valueOf = function() {
    return this.value;
};

Measurement.prototype.add = function(measurement) {
    // Make sure the measurements match
    this.checkDimension(measurement.dimension);
    // Add it
    this.value += measurement;
};

Measurement.prototype.subtract = function(measurement) {
    // Make sure the measurements match
    this.checkDimension(measurement.dimension);
    // Add it
    this.value -= measurement;
};

Measurement.prototype.multiply = function(measurement) {
    // Make sure the measurements match
    this.checkDimension(measurement.dimension);
    // Add it
    this.value *= measurement;
};

Measurement.prototype.divide = function(measurement) {
    // Make sure the measurements match
    this.checkDimension(measurement.dimension);
    // Add it
    this.value /= measurement;
};

Measurement.prototype.checkDimension = function(dimension) {
    // It's assumed that it's a number so nothing left to do.
    if(typeof dimension === 'undefined') {
        return;
    }
    // The dimensions must match
    if(this.dimension !== dimension) {
        throw new Error(`Dimension mismatch! You're trying to perform operations on "${this.dimension}" & "${dimension}"`);
    }
};

var Units = {
    init: function () {
        // Add a reference to all the aliases
        for (var x in this.aliases) {
            var alias_obj = this.aliases[x];
            var units_obj = this.units[x];
            // Mark them in the units object
            for (var y in alias_obj) {
                var unit = units_obj[y];
                var aliases = alias_obj[y];
                // Link them
                for (var i = 0; i < aliases.length; i++) {
                    var alias = aliases[i];
                    units_obj[alias] = unit;
                }
            }
        }
    },
    units: {
        length: {
            'ft': {
                factor: 1 / 3.2808,
                system: 'imperial'
            },
            'inch': {
                factor: 1 / 39.37,
                system: 'imperial'
            },
            'yd': {
                factor: 1 / 1.094,
                system: 'imperial'
            },
            'm': {
                main: true,
                factor: 1,
                system: 'metric'
            },
            'dm': {
                factor: 1 / 10,
                system: 'metric'
            },
            'cm': {
                factor: 1 / 100,
                system: 'metric'
            },
            'mm': {
                factor: 1 / 1000,
                system: 'metric'
            }
        },
        area: {
            'sy': {
                factor: 1 / 1.196,
                system: 'imperial'
            },
            'm^2': {
                main: true,
                factor: 1,
                system: 'metric'
            }
        },
        volume: {
            'cy': {
                factor: 1 / 1.1959900463010802,
                system: 'imperial'
            },
            'm^3': {
                main: true,
                factor: 1,
                system: 'metric'
            }
        },
        weight: []
    },
    aliases: {
        length: {
            'ft': ['foot', "'"],
            'inch': [`"`],
            'm': ['meter'],
            'dm': ['decimeter'],
            'cm': ['centimeter'],
            'mm': ['millimeter'],
            'yd': ['yard']
        },
        area: {
            'sy': ['yd^2', 'yd2', 'sqyd'],
            'm^2': ['m2', 'sqm']
        }
    },
    parse: function (inputString) {
        // Convert to string for safety
        inputString = String(inputString);
        var regex = UNIT_REGEX;
        // Reset the regex
        regex.lastIndex = 0;
        // Get the units
        var dimensions = inputString.match(regex);
        var measurement = new Measurement({
            inputString: inputString
        });
        // Loop through them and convert them all
        // They  have to match in dimension
        var prev_dim_type;
        for (var i = 0; i < dimensions.length; i++) {
            var d = dimensions[i];
            // Reset the index of the regex. 
            // https://stackoverflow.com/questions/11477415/why-does-javascripts-regex-exec-not-always-return-the-same-value
            regex.lastIndex = 0;
            // Separate the dimension and the value
            var dim_parts = regex.exec(d);
            // Get the value and dimension
            var value = dim_parts[1];
            var dim = dim_parts[2];
            var dim_type;
            // Get which dimension type it belongs to
            for (dim_type in Units.units) {
                var unit_object = Units.units[dim_type];
                var found = unit_object[dim];
                if (typeof found !== 'undefined') {
                    if (typeof prev_dim_type === 'undefined') {
                        // Make a note of the dimension type
                        prev_dim_type = dim_type;
                    }
                    // Done. We found the dimension which is belongs to
                    break;
                }
            }
            // If we don't recognize the unit then complain
            if (typeof found === 'undefined') {
                //throw new Error(`"${dim}" is not a recognized unit`);
                // Assume that this unit type is a unit e.g. bag, each, bundle, etc
                dim_type = 'unit';
            }
            // The dimension types have to make sense. Cannot add weight to length for instance
            if (dim_type !== prev_dim_type) {
                throw new Error(`Dimension type mismatch. You're trying to match "${prev_dim_type}" to "${dim_type}"`);
            }
            // We have a match and the dimension types match
            else {
                if(!measurement.dimension) {
                    measurement.dimension = dim_type;
                }
                measurement.add(value * found.factor);
            }
        }
        return measurement;
    }
};
// Initialize
Units.init();

console.log(Units.parse(`2bags`))