<?php 

/* Filters possible Blocksy color palletes */
function museupaulista_filter_palette( $args ) {
	return array(
		array(
			'name' => 'Primária Museu Paulista',
			'slug' => 'palette-color-1',
			'color' => 'var(--paletteColor1, #F57832)'
		),
		array(
			'name' => 'Secondária Escuro Museu Paulista',
			'slug' => 'palette-color-2',
			'color' => 'var(--paletteColor2, #BE4B28)'
		),
		array(
			'name' => 'Cor de Texto Museu Paulista',
			'slug' => 'palette-color-3',
			'color' => 'var(--paletteColor3, #000000)'
		),
		array(
			'name' => 'Cor de Título Museu Paulista',
			'slug' => 'palette-color-4',
			'color' => 'var(--paletteColor4, #000000)'
		), 
		array(
			'name' => 'Cor de Borda Museu Paulista',
			'slug' => 'palette-color-5',
			'color' => 'var(--paletteColor5, #000000)'
		),
		array(
			'name' => 'Cor de Fundo do Cabeaçalho Museu Paulista',
			'slug' => 'palette-color-6',
			'color' => 'var(--paletteColor6, #ffffff)'
		),
		array(
			'name' => 'Cor de Fundo do site Museu Paulista',
			'slug' => 'palette-color-7',
			'color' => 'var(--paletteColor7, #fffff)'
		),
		array(
			'name' => 'Cor de Fundo dos Cartões Museu Paulista',
			'slug' => 'palette-color-8',
			'color' => 'var(--paletteColor8, #ffffff)'
		),
		array(
			'name' => 'Primária Claro Museu Paulista',
			'slug' => 'palette-color-9',
			'color' => 'var(--paletteColor9, #ffd791)'
		),
		array(
			'name' => 'Primária Escuro Museu Paulista',
			'slug' => 'palette-color-10',
			'color' => 'var(--paletteColor10, #f5b914)'
		),
		array(
			'name' => 'Secundária Museu Paulista',
			'slug' => 'palette-color-11',
			'color' => 'var(--paletteColor11, #eb1e23)'
		),
		array(
			'name' => 'Secundária Clara Museu Paulista',
			'slug' => 'palette-color-12',
			'color' => 'var(--paletteColor12, #f5a09b)'
		),
		array(
			'name' => 'Cor de Erro Museu Paulista',
			'slug' => 'palette-color-13',
			'color' => 'var(--paletteColor13, #f04164)'
		),
		array(
			'name' => 'Cor de Erro Clara Museu Paulista',
			'slug' => 'palette-color-14',
			'color' => 'var(--paletteColor14, #e1af96)'
		),
		array(
			'name' => 'Cor de Erro Escura Museu Paulista',
			'slug' => 'palette-color-15',
			'color' => 'var(--paletteColor15, #a50d2c)'
		),
		array(
			'name' => 'Cor de Acerto Museu Paulista',
			'slug' => 'palette-color-16',
			'color' => 'var(--paletteColor16, #14877d)'
		),
		array(
			'name' => 'Cor de Acerto Clara Museu Paulista',
			'slug' => 'palette-color-17',
			'color' => 'var(--paletteColor17, #82c8be)'
		),
		array(
			'name' => 'Cor de Acero Escura Museu Paulista',
			'slug' => 'palette-color-18',
			'color' => 'var(--paletteColor14, #0d5952)'
		),
		array(
			'name' => 'Escuro Museu Paulista',
			'slug' => 'palette-color-19',
			'color' => 'var(--paletteColor19, #333333'
		),
		array(
			'name' => 'Claro Museu Paulista',
			'slug' => 'palette-color-20',
			'color' => 'var(--paletteColor20, #f5f5f5)'
		),
		array(
			'name' => 'Cinza Museu Paulista',
			'slug' => 'palette-color-21',
			'color' => 'var(--paletteColor21, #e6e6e6)'
		),
		array(
			'name' => 'Mais cinza Museu Paulista',
			'slug' => 'palette-color-22',
			'color' => 'var(--paletteColor22, #666666)'
		)
	);
}
add_filter( 'blocksy:editor-color-palette', 'museupaulista_filter_palette' );
