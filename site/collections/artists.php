<?php
return function () {
		return page('artists')->children()->sortBy('sort','asc');
};