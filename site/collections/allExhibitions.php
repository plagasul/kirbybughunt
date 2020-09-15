<?php
return function () {
		return page('exhibitions')->children()->sortBy('openingdate', 'desc');
};