<?php
return function () {
		return page('fairs')->fairs()->toStructure()->sortBy('openingdate','desc');
};