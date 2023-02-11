<?php

function reserveRoom($roomNumber, $guestName, $startDate, $endDate, $availabilityChecker) {
    $roomAvailability = $availabilityChecker($roomNumber, $startDate, $endDate);

    if ($roomAvailability) {
        // Room is available, so reserve it
        $reservation = array(
            "roomNumber" => $roomNumber,
            "guestName" => $guestName,
            "startDate" => $startDate,
            "endDate" => $endDate
        );

        // Add the reservation to the database
        addReservationToDB($reservation);

        return "Room reserved successfully!";
    } else {
        return "Sorry, room is not available during the specified dates.";
    }
}

$checkRoomAvailabilityInDB = function ($roomNumber, $startDate, $endDate) {
    // Query the database to see if the room is available during the specified dates
    $roomAvailability = checkRoomAvailabilityInDB($roomNumber, $startDate, $endDate);

    return $roomAvailability;
};

$reserveResult = reserveRoom(101, "John Doe", "2023-03-01", "2023-03-03", $checkRoomAvailabilityInDB);

echo $reserveResult;
