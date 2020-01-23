/**
 * Apple-Style Flip Counter
 * ------------------------
 *
 * Copyright (c) 2010 Chris Nanney
 * http://cnanney.com/journal/code/apple-style-counter-revisited/
 * http://cnanney.com/journal/code/apple-style-counter/
 *
 * Licensed under MIT
 * http://www.opensource.org/licenses/mit-license.php
 */
 
var flipCounter = function(d, options){

	// Default values
	var defaults = {
		value: 0,
		inc: 1,
		pace: 1000,
		auto: true,
		debug: false //Uses console.log, so don't enable unless your browser supports it.
	};
	
	var o = options || {},
	div = d && d != '' ? "#" + d : "#counter";
	
	for (var opt in defaults) o[opt] = (opt in o) ? o[opt] : defaults[opt];

	var tFrameHeight = 39,
	bFrameHeight = 64,
	frameWidth = 53,
	digitsOld = [], digitsNew = [], subStart, subEnd, x, y, nextCount = null;
	
	/**
	 * Sets the value of the counter and animates the digits to new value.
	 * 
	 * Example: myCounter.setValue(500); would set the value of the counter to 500,
	 * no matter what value it was previously.
	 *
	 * @param {int} n
	 *   New counter value
	 */
	this.setValue = function(n){
		if (isNumber(n)){
			x = o.value.toString();
			y = n.toString();
			o.value = n;
			digitCheck(x,y);
		}
		return this;
	};
	
	/**
	 * Sets the increment for the counter. Does NOT animate digits.
	 */
	this.setIncrement = function(n){
		o.inc = isNumber(n) ? n : defaults.inc;
		return this;
	};
	
	/**
	 * Sets the pace of the counter. Only affects counter when auto == true.
	 *
	 * @param {int} n
	 *   New pace for counter in milliseconds
	 */
	this.setPace = function(n){
		o.pace = isNumber(n) ? n : defaults.pace;
		return this;
	};
	
	/**
	 * Sets counter to auto-incrememnt (true) or not (false).
	 *
	 * @param {bool} a
	 *   Should counter auto-increment, true or false
	 */
	this.setAuto = function(a){
		if (a && ! o.atuo){
			o.auto = true;
			doCount();
		}
		if (! a && o.auto){
			if (nextCount) clearNext();
			o.auto = false;
		}
		return this;
	};
	
	/**
	 * Increments counter by one animation based on set 'inc' value.
	 */
	this.step = function(){
		if (! o.auto) doCount();
		return this;
	};
	
	/**
	 * Adds a number to the counter value, not affecting the 'inc' or 'pace' of the counter.
	 *
	 * @param {int} n
	 *   Number to add to counter value
	 */
	this.add = function(n){
		if (isNumber(n)){
			x = o.value.toString();
			o.value += n;
			y = o.value.toString();
			digitCheck(x,y);
		}
		return this;
	};
	
	/**
	 * Subtracts a number from the counter value, not affecting the 'inc' or 'pace' of the counter.
	 *
	 * @param {int} n
	 *   Number to subtract from counter value
	 */
	this.subtract = function(n){
		if (isNumber(n)){
			x = o.value.toString();
			o.value -= n;
			if (o.value >= 0){
				y = o.value.toString();
			}
			else{
				y = "0";
				o.value = 0;
			}
			digitCheck(x,y);
		}
		return this;
	};
	
	/**
	 * Increments counter to given value, animating by current pace and increment.
	 *
	 * @param {int} n
	 *   Number to increment to
	 * @param {int} t (optional)
	 *   Time duration in seconds - makes increment a 'smart' increment
	 * @param {int} p (optional)
	 *   Desired pace for counter if 'smart' increment
	 */
	this.incrementTo = function(n, t, p){
		if (nextCount) clearNext();
		
		// Smart increment
		if (typeof t != 'undefined'){
			var time = isNumber(t) ? t * 1000 : 10000,
			pace = typeof p != 'undefined' && isNumber(p) ? p : o.pace,
			diff = typeof n != 'undefined' && isNumber(n) ? n - o.value : 0,
			cycles, inc, q, nq, check,
			i = 0,
			best = {
				pace: 0,
				inc: 0
			};
			
			// Initial best guess
			pace = (time / diff > pace) ? Math.round((time / diff) / 10) * 10 : pace;
			cycles = Math.floor(time / pace);
			inc = Math.round(diff / cycles);
			q = Math.abs(diff - (cycles * inc)) + Math.abs(cycles * pace - time);
			
			check = checkSmartValues(diff, cycles, inc, pace, time);
			
			// DEBUGGING
			/*
			if (o.debug){
				console.log(
					'***************************************************************\n' + 
					'START: ' + o.value + '\nEND: ' + n + '\n' + check.str
				);
			}
			*/
			
			if (diff > 0){
				while (check.result === false && i < 100){				
					pace += 10;
					cycles = Math.floor(time / pace);
					inc = Math.round(diff / cycles);
					nq = Math.abs(diff - (cycles * inc)) + Math.abs(cycles * pace - time);
					
					check = checkSmartValues(diff, cycles, inc, pace, time);
					
					if (nq < q){
						q = nq;
						best.pace = pace;
						best.inc = inc;
					}
					
					// DEBUGGING
					/*
					if (o.debug){
						console.log('ADJUSTMENT: ' + (i + 1) + '\n' + check.str);
					}
					*/
					
					i++;
				}
				
				if (i == 100){
					// Could not find optimal settings, use best found so far
					o.inc = best.inc;
					o.pace = best.pace;
				}
				else{
					// Optimal settings found, use those
					o.inc = inc;
					o.pace = pace;
				}
				
				doIncrement(n, true, cycles);
			}
		
		}
		// Regular increment
		else{
			doIncrement(n);
		}
		
		
	}
	
	/**
	 * Gets current value of counter.
	 */
	this.getValue = function(){
		return o.value;
	}
	
	/**
	 * Stops all running increments.
	 */
	this.stop = function(){
		if (nextCount) clearNext();
		return this;
	}
	
	//---------------------------------------------------------------------------//
	
	function doCount(){
		x = o.value.toString();
		o.value += o.inc;
		y = o.value.toString();
		digitCheck(x,y);
		if (o.auto === true) nextCount = setTimeout(doCount, o.pace);
	}
	
	function doIncrement(n, s, c){
		var val = o.value,
		smart = (typeof s == 'undefined') ? false : s,
		cycles = (typeof c == 'undefined') ? 1 : c;
		
		if (smart === true) cycles--;
		
		if (val != n){
			x = o.value.toString(),
			o.auto = true;

			if (val + o.inc <= n && cycles != 0) val += o.inc
			else val = n;
			
			o.value = val;
			y = o.value.toString();
			
			digitCheck(x,y);
			nextCount = setTimeout(function(){doIncrement(n, smart, cycles)}, o.pace);
		}
		else o.auto = false;
	}
	
	function digitCheck(x,y){
		digitsOld = splitToArray(x);
		digitsNew = splitToArray(y);
		if (y.length > x.length){
			var diff = y.length - x.length;
			while (diff > 0){
				var adder = 1;
				addDigit(y.length - diff + 1, digitsNew[y.length - diff]);
				adder++;
				diff--;
			}
		}
		if (y.length < x.length){
			var diff = x.length - y.length;
			while (diff > 0){
				var adder = 1;
				removeDigit(x.length - diff);
				diff--;
			}
		}
		for (var i = 0; i < digitsOld.length; i++){
			if (digitsNew[i] != digitsOld[i]){
				animateDigit(i, digitsOld[i], digitsNew[i]);
			}
		}
	}
	
	function animateDigit(n, oldDigit, newDigit){
		var speed, step = 0, w,
		bp = [
			'-' + frameWidth + 'px -' + (oldDigit * tFrameHeight) + 'px',
			(frameWidth * -2) + 'px -' + (oldDigit * tFrameHeight) + 'px',
			'0 -' + (newDigit * tFrameHeight) + 'px',
			'-' + frameWidth + 'px -' + (oldDigit * bFrameHeight) + 'px',
			(frameWidth * -2) + 'px -' + (newDigit * bFrameHeight) + 'px',
			(frameWidth * -3) + 'px -' + (newDigit * bFrameHeight) + 'px',
			'0 -' + (newDigit * bFrameHeight) + 'px'
		];

		if (o.auto === true && o.pace <= 300){
			switch (n){
				case 0:
					speed = o.pace/6;
					break;
				case 1:
					speed = o.pace/5;
					break;
				case 2:
					speed = o.pace/4;
					break;
				case 3:
					speed = o.pace/3;
					break;
				default:
					speed = o.pace/2;
					break;
			}
		}
		else{
			speed = 80;
		}
		// Cap on slowest animation can go
		speed = (speed > 80) ? 80 : speed;
		
		function animate(){
			if (step < 7){
				w = step < 3 ? 't' : 'b';
				jQuery(div + " #d" + n + " li." + w).css("background-position", bp[step]);
				step++;
				if (step != 3) setTimeout(animate, speed);
				else animate();
			}
		}
		
		animate();
	}
	
	// Creates array of digits for easier manipulation
	function splitToArray(input){
		var digits = new Array();
		for (var i = 0; i < input.length; i++){
			subStart = input.length - (i + 1);
			subEnd = input.length - i;
			digits[i] = input.substring(subStart, subEnd);
		}
		return digits;
	}

	// Adds new digit
	function addDigit(len, digit){
		var li = Number(len) - 1;
		if (li % 3 == 0) jQuery(div).prepend('<ul class="cd"><li class="s"></li></ul>');
		jQuery(div).prepend('<ul class="cd" id="d' + li + '"><li class="t"></li><li class="b"></li></ul>');
		jQuery(div + " #d" + li + " li.t").css({'background-position': '0 -' + (digit * tFrameHeight) + 'px'});
		jQuery(div + " #d" + li + " li.b").css({'background-position': '0 -' + (digit * bFrameHeight) + 'px'});
	}
	
	// Removes digit
	function removeDigit(id){
		jQuery(div + " #d" + id).remove();
		// Check for leading comma
		var first = jQuery(div + " li").first();
		if (first.hasClass("s")) first.parent("ul").remove();
	}

	// Sets the correct digits on load
	function initialDigitCheck(initial){
		// Creates the right number of digits
		var count = initial.toString().length;
		var bit = 1;
		for (var i = 0; i < count; i++){
			jQuery(div).prepend('<ul class="cd" id="d' + i + '"><li class="t"></li><li class="b"></li></ul>');
			if (bit != (count) && bit % 3 == 0) jQuery(div).prepend('<ul class="cd"><li class="s"></li></ul>');
			bit++;
		}
		// Sets them to the right number
		var digits = splitToArray(initial.toString());
		for (var i = 0; i < count; i++){
			jQuery(div + " #d" + i + " li.t").css({'background-position': '0 -' + (digits[i] * tFrameHeight) + 'px'});
			jQuery(div + " #d" + i + " li.b").css({'background-position': '0 -' + (digits[i] * bFrameHeight) + 'px'});
		}
		// Do first animation
		if (o.auto === true) nextCount = setTimeout(doCount, o.pace);
	}
	
	// Checks values for smart increment and creates debug text
	function checkSmartValues(diff, cycles, inc, pace, time){
		var r = {result: true};
		// Test conditions, all must pass to continue:
		// 1: Unrounded inc value needs to be at least 1
		r.cond1 = (diff / cycles >= 1) ? true : false;
		// 2: Don't want to overshoot the target number
		r.cond2 = (cycles * inc <= diff) ? true : false;
		// 3: Want to be within 5 of the target number
		r.cond3 = (Math.abs(cycles * inc - diff) <= 5) ? true : false;
		// 4: Total time should be within 100ms of target time.
		r.cond4 = (Math.abs(cycles * pace - time) <= 100) ? true : false;
		// 5: Calculated time should not be over target time
		r.cond5 = (cycles * pace <= time) ? true : false;
		
		// DEBUGGING
		//r.str = 'Condition Checks:\n';
		for (var i = 1; i <= 5; i++){
			//r.str += i + ': ';
			if (r['cond' + i] === false){
				//r.str += 'FAIL';
				r.result = false;
			}
			/*
			else{
				r.str += 'PASS';
			}
			r.str += i < 5 ? ', ' : '';
			*/
		}
		
		// DEBUGGING
		/*
		r.str += '\n----\n   Pace: ' + pace +
			'\n   Cycles: ' + cycles +
			'\n   Calculated Inc: ' + (diff / cycles) +
			'\n   Rounded Inc: ' + inc +
			'\n   Calculated time: ' + Math.abs(cycles * pace) +
			'\n   Target time: ' + time +
			'\n   ACTUAL END VALUE: ' + (cycles*inc+o.value);
		*/
		return r;
	}
	
	// http://stackoverflow.com/questions/18082/validate-numbers-in-javascript-isnumeric/1830844
	function isNumber(n) {
		return !isNaN(parseFloat(n)) && isFinite(n);
	}
	
	function clearNext(){
		clearTimeout(nextCount);
		nextCount = null;
	}
	
	// Start it up
	initialDigitCheck(o.value);
};