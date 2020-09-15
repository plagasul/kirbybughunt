<?php
return function () {
		return collection('allFairs')->filterBy('closingdate', 'date <', 'today');
};