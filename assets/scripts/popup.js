// JavaScript Document

$(function() {
	$('.try').click(function(e) {
		$("#modelBox").lightbox_me({centered: true, onLoad: function() {
			$("#modelBox").find("input:first").focus();
		}});
		e.preventDefault();
	});
	$('.try-2').click(function(e) {
		$("#modelBox2").lightbox_me({centered: true, onLoad: function() {
			$("#modelBox").find("input:first").focus();
		}});
		e.preventDefault();
	});
	$('.try-3').click(function(e) {
		$("#modelBox3").lightbox_me({centered: true, onLoad: function() {
			$("#modelBox").find("input:first").focus();
		}});
		e.preventDefault();
	});
	$('.try-4').click(function(e) {
		$("#modelBox4").lightbox_me({centered: true, onLoad: function() {
			$("#modelBox").find("input:first").focus();
		}});
		e.preventDefault();
	});
	$('.try-5').click(function(e) {
		$("#modelBox5").lightbox_me({centered: true, onLoad: function() {
			$("#modelBox").find("input:first").focus();
		}});
		e.preventDefault();
	});
	$('.try-6').click(function(e) {
		$("#modelBox6").lightbox_me({centered: true, onLoad: function() {
			$("#modelBox").find("input:first").focus();
		}});
		e.preventDefault();
	});
});
