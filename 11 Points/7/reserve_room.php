<?php

class HotelManagementSystemTest extends PHPUnit\Framework\TestCase
{
    public function testReserveRoom()
    {
        $hotel = new HotelManagementSystem();
        $room = $hotel->getRooms()[0];
        $result = $hotel->reserveRoom($room['room_number']);
        $this->assertTrue($result);
        $this->assertFalse($hotel->checkAvailability($room['room_number']));
    }
}
