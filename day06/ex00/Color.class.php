<?php
class Color
{
	public $red;
	public $green;
	public $blue;

	public static $verbose = False;

	public static function doc()
	{
		if (file_exists(__DIR__ . '/Color.doc.txt'))
		{
			return (file_get_contents(__DIR__ . '/Color.doc.txt'));
		}
	}

	public function __toString()
	{
		return sprintf("Color( red: %3d, green: %3d, blue: %3d )",
			$this->red, $this->green, $this->blue);
	}

	public function __destruct()
	{
		if (self::$verbose)
		{
			echo $this . " destructed." . PHP_EOL;
		}
	}

	public function __construct($rainbow)
	{
		if (gettype($rainbow) === 'array' and func_num_args() === 1)
		{
			if (isset($rainbow['rgb']) and is_numeric($rainbow['rgb']))
			{
				$this->red = ($rainbow['rgb'])&0xFF;
				$this->green = ($rainbow['rgb']>>8)&0xFF;
				$this->blue = ($rainbow['rgb']>>16)&0xFF;
			}
			else
			{
				$this->red = $rainbow['red'] + 0;
				$this->green = $rainbow['green'] + 0;
				$this->blue = $rainbow['blue'] + 0;
			}

		}
		else
		{
			$this->red = 0xFF;
			$this->green = 0xFF;
			$this->blue = 0xFF;
		}

		if (self::$verbose)
		{
			echo $this . " constructed." . PHP_EOL;
		}

	}

	public function add($other)
	{
		if ($other instanceof self)
		{
			$new = new Color(array(
				'red' => $this->red + $other->red,
				'blue' => $this->blue + $other->blue,
				'green' => $this->green + $other->green
			));
			return $new;
		}
		else
			return (NULL);
	}

	public function sub($other)
	{
		if ($other instanceof self)
		{
			$new = new Color(array(
				'red' => $this->red - $other->red,
				'blue' => $this->blue - $other->blue,
				'green' => $this->green - $other->green
			));
			return $new;
		}
		else
			return (NULL);
	}
	public function mult($other)
	{
		if (is_numeric($other))
		{
			$new = new Color(array(
				'red' => $this->red * $other,
				'blue' => $this->blue * $other,
				'green' => $this->green * $other
			));
			return $new;
		}
		else
			return (NULL);
	}

}
?>
