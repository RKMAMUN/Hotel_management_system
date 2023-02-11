<?php

class RoomManagementTest extends PHPUnit\Framework\TestCase
{
    public function testAddRoom()
    {
        $roomManagement = new RoomManagement();
        $room = array(
            'room_number' => 101,
            'room_type' => 'Deluxe',
            'price' => 150
        );
        $result = $roomManagement->addRoom($room);
        $this->assertTrue($result);
        $this->assertEquals($room, $roomManagement->getRoom(101));
    }

    public function testUpdateRoom()
    {
        $roomManagement = new RoomManagement();
        $room = array(
            'room_number' => 102,
            'room_type' => 'Standard',
            'price' => 100
        );
        $roomManagement->addRoom($room);
        $room['price'] = 120;
        $result = $roomManagement->updateRoom(102, $room);
        $this->assertTrue($result);
        $this->assertEquals($room, $roomManagement->getRoom(102));
    }

    public function testDeleteRoom()
    {
        $roomManagement = new RoomManagement();
        $room = array(
            'room_number' => 103,
            'room_type' => 'Superior',
            'price' => 200
        );
        $roomManagement->addRoom($room);
        $result = $roomManagement->deleteRoom(103);
        $this->assertTrue($result);
        $this->assertNull($roomManagement->getRoom(103));
    }
}
