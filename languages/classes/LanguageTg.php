<?php
/**
 * Tajik (Тоҷикӣ) specific code.
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 *
 * @file
 * @ingroup Language
 */

/**
 * Converts Tajiki to Latin orthography
 *
 * @ingroup Language
 */
class TgConverter extends LanguageConverter {
	private $table = [
		'а' => 'a',
		'б' => 'b',
		'в' => 'v',
		'г' => 'g',
		'д' => 'd',
		'е' => 'e',
		'ё' => 'jo',
		'ж' => 'ƶ',
		'з' => 'z',
		'ии ' => 'iji ',
		'и' => 'i',
		'й' => 'j',
		'к' => 'k',
		'л' => 'l',
		'м' => 'm',
		'н' => 'n',
		'о' => 'o',
		'п' => 'p',
		'р' => 'r',
		'с' => 's',
		'т' => 't',
		'у' => 'u',
		'ф' => 'f',
		'х' => 'x',
		'ч' => 'c',
		'ш' => 'ş',
		'ъ' => '\'',
		'э' => 'e',
		'ю' => 'ju',
		'я' => 'ja',
		'ғ' => 'ƣ',
		'ӣ' => 'ī',
		'қ' => 'q',
		'ӯ' => 'ū',
		'ҳ' => 'h',
		'ҷ' => 'ç',
		'ц' => 'ts',
		'А' => 'A',
		'Б' => 'B',
		'В' => 'V',
		'Г' => 'G',
		'Д' => 'D',
		'Е' => 'E',
		'Ё' => 'Jo',
		'Ж' => 'Ƶ',
		'З' => 'Z',
		'И' => 'I',
		'Й' => 'J',
		'К' => 'K',
		'Л' => 'L',
		'М' => 'M',
		'Н' => 'N',
		'О' => 'O',
		'П' => 'P',
		'Р' => 'R',
		'С' => 'S',
		'Т' => 'T',
		'У' => 'U',
		'Ф' => 'F',
		'Х' => 'X',
		'Ч' => 'C',
		'Ш' => 'Ş',
		'Ъ' => '\'',
		'Э' => 'E',
		'Ю' => 'Ju',
		'Я' => 'Ja',
		'Ғ' => 'Ƣ',
		'Ӣ' => 'Ī',
		'Қ' => 'Q',
		'Ӯ' => 'Ū',
		'Ҳ' => 'H',
		'Ҷ' => 'Ç',
		'Ц' => 'Ts',
	];

	/**
	 * @param Language $langobj
	 */
	public function __construct( Language $langobj ) {
		$variants = [ 'tg', 'tg-latn' ];
		parent::__construct( $langobj, 'tg', $variants );
	}

	protected function loadDefaultTables() {
		$this->mTables = [
			'tg-latn' => new ReplacementArray( $this->table ),
			'tg' => new ReplacementArray()
		];
	}
}
