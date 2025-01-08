<?php 
function getGames(): array {
    return [
        ["name" => "GTA V", "editor" => "Rockstar Games", "year" => 2015, "description" => "A RPG Game"],
        ["name" => "Clash Royale", "editor" => "Supercell", "year" => 2010, "description" => "A Strategy Game"],
        ["name" => "Rocket League", "editor" => "Epic Games", "year" => 2019, "description" => "A Sports Game"],
        ["name" => "Valorant", "editor" => "Riot Games", "year" => 2021, "description" => "A FPS Game"],
    ];
};

function getGameByIndex($index): array|bool {
    if (isset($index)) {
        $games = getGames();
        return $games[$index];
    } 
    return false;
};
?>