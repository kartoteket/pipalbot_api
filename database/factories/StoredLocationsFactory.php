<?php

use Faker\Generator as Faker;
use Kartoteket\Generators\Geography as GeoFaker;

/**
 * Creates a factory that can seed the database with geographic columns, all wery much homemmade
 */
$factory->define(App\StoredLocations::class, function (Faker $faker) {

    $dataType = GeoFaker::getGeographyType();
    $geoData = GeoFaker::getGeography($dataType);
    $constraint = null;
    // omit the envelope if datatype is POINT (cannot create a polygon from a point)
    // TODO: Increase the point by something really small to create a box
    if ($dataType != 'POINT') {
        $constraint = DB::raw(" ST_Envelope('".$geoData."'::geometry)");
    }
    // seed data
    return [
        'osm_id' => $faker->randomNumber(),
        'name' => $faker->city,
        'datatype' => $dataType,
        'constraints' => $constraint,
        'country' => $faker->country,
        'iso_3' => $faker->lexify('???'),
        'address' => '{"key": {"key2":"value"}}',
        'class' => $faker->randomFloat(4, 0, 1),
        'display_name' => $faker->city,
        'geography' => DB::raw(" ST_GeomFromText('" . $geoData . "')"),
        'geojson' => '{"key": {"key2":"value"}}',
    ];
});
