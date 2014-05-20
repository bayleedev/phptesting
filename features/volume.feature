Feature: volume
	In order to better hear misleading television
	As a consumer
	I need to be able to adjust the volume

Scenario: Turn normal volume up
	Given the volume is at "3"
	And I set the volume to "up"
	Then the volume should be at "4"

Scenario: Turn max volume up
	Given the volume is at "10"
	And I set the volume to "up"
	Then the volume should be at "10"

Scenario: Turn min volume down
	Given the volume is at "0"
	And I set the volume to "down"
	Then the volume should be at "0"
