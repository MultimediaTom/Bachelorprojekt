CREATE TABLE tx_theshop_domain_model_kunde (
	kundennummer int(11) NOT NULL DEFAULT '0',
	name varchar(255) NOT NULL DEFAULT '',
	vorname varchar(255) NOT NULL DEFAULT '',
	adresse varchar(255) NOT NULL DEFAULT '',
	bestellung int(11) unsigned DEFAULT '0'
);

CREATE TABLE tx_theshop_domain_model_produkt (
	artikelnummer text NOT NULL DEFAULT '',
	bezeichnung varchar(255) NOT NULL DEFAULT '',
	beschreibung varchar(255) NOT NULL DEFAULT '',
	preis double(11,2) NOT NULL DEFAULT '0.00',
	lagermenge int(11) NOT NULL DEFAULT '0',
	bilddatei varchar(255) NOT NULL DEFAULT ''
);

CREATE TABLE tx_theshop_domain_model_warenkorb (
	kundennummer int(11) NOT NULL DEFAULT '0',
	artikelnummer int(11) NOT NULL DEFAULT '0',
	anzahl int(11) NOT NULL DEFAULT '0',
	preis int(11) NOT NULL DEFAULT '0',
	status varchar(255) NOT NULL DEFAULT ''
);
