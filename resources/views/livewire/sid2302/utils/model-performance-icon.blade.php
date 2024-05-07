<div @class(["text-center text-sm font-medium text-zinc-200 border opacity-75",
    "bg-[#858BB5]" => $value < 0.25,
    "bg-[#518BA6]" => $value >= 0.25 and $value < 0.5,
    "bg-[#2B878A]" => $value >= 0.5 and $value < 0.75,
    "bg-[#2B7F69]" => $value >= 0.75 and $value < 0.9,
    "bg-[#3F7348]" => $value >= 0.9
])>
    {{-- Success is as dangerous as failure. --}}
    <div>{{ $value }}</div>
</div>
