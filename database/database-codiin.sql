CREATE TABLE dbo.Perfil ( 
	id_perfil            int NOT NULL   identity ,
	nombre               nchar(20)     ,
	CONSTRAINT Pk_Perfil_id_perfil PRIMARY KEY  ( id_perfil ) 
 );
GO

CREATE TABLE dbo.UsuarioOfExt ( 
	id_usuario           int NOT NULL   identity ,
	cargo                nchar(25)     ,
	nombres              nchar(35)     ,
	apellido             nchar(35)     ,
	tipo_documento       nchar(12)     ,
	nro_documento        nchar(12)     ,
	fotocopia_doc        varchar(max)     ,
	declar_jurada        varchar(max)     ,
	usuario              nchar(25) NOT NULL    ,
	clave                nchar(60)     ,
	habilitado           bit  CONSTRAINT [defo_UsuarioOfExt_habilitado] DEFAULT 1   ,
	id_perfil            int NOT NULL    ,
	CONSTRAINT Pk_Usuario PRIMARY KEY  ( id_usuario ) ,
	CONSTRAINT Unq_Usuario UNIQUE ( usuario ) 
 );
GO

CREATE TABLE dbo.Oficina_externa ( 
	id_oficina_externa   int NOT NULL   identity ,
	nombre               nchar(255) NOT NULL    ,
	direccion            nchar(80)     ,
	telefono             nchar(40)     ,
	email                nchar(40)     ,
	id_responsable       int NOT NULL    ,
	activadoPorCodigo    bit     ,
	codigoActivacion     char(8)     ,
	CONSTRAINT Pk_Oficina_externa_id_oficina_externa PRIMARY KEY  ( id_oficina_externa ) 
 );
GO

CREATE TABLE dbo.PresentacionEgreso ( 
	id_presentacionegreso int NOT NULL   identity ,
	asunto               varchar(800)     ,
	id_area_origen       varchar(50) NOT NULL    ,
	id_oficina_destino   int NOT NULL    ,
	expte_jud            varchar(50) NOT NULL    ,
	contenido            varbinary(max)     ,
	adjunto              varbinary(max)     ,
	fecha_envio          datetime     ,
	CONSTRAINT Pk_PresentacionEgreso_id_presentacionegreso PRIMARY KEY  ( id_presentacionegreso ) 
 );
GO

exec [CODIIN_prueba].sys.sp_addextendedproperty  @name=N'MS_Description', @value=N'Creado por alguna oficina judicial con destino a un organismo/oficina externa' , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'TABLE',@level1name=N'PresentacionEgreso';;
GO

CREATE TABLE dbo.PresentacionIngreso ( 
	id_presentacioningreso int NOT NULL   identity ,
	tipo_presentacion    nchar(120)     ,
	asunto               varchar(800)     ,
	id_area_destino      varchar(50) NOT NULL    ,
	id_oficina_origen    int NOT NULL    ,
	expte_pol            varchar(50)     ,
	sum_pol              varchar(50)     ,
	contenido            varbinary(max)     ,
	adjunto              varbinary(max)     ,
	fecha_firma          datetime     ,
	fecha_eleva          datetime     ,
	reservado            bit     ,
	borrador             bit     ,
	parafirmar           bit     ,
	observacion          varchar(300)     ,
	CONSTRAINT Pk_PresentacionIngreso_id_presentacioningreso PRIMARY KEY  ( id_presentacioningreso ) 
 );
GO

exec [CODIIN_prueba].sys.sp_addextendedproperty  @name=N'MS_Description', @value=N'Creado por las oficinas externas y destino las oficinas judiciales (ingreso al sistema judicial)' , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'TABLE',@level1name=N'PresentacionIngreso';;
GO

exec [CODIIN_prueba].sys.sp_addextendedproperty  @name=N'MS_Description', @value=N'seleccion si es de algun tipo particular o cargar uno propio p.ej. [ oficio, constatacion, informe, etc ]' , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'TABLE',@level1name=N'PresentacionIngreso', @level2type=N'COLUMN',@level2name=N'tipo_presentacion';
GO

exec [CODIIN_prueba].sys.sp_addextendedproperty  @name=N'MS_Description', @value=N'S015_DEPENDENCIA del SIGI' , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'TABLE',@level1name=N'PresentacionIngreso', @level2type=N'COLUMN',@level2name=N'id_area_destino';
GO

exec [CODIIN_prueba].sys.sp_addextendedproperty  @name=N'MS_Description', @value=N'fecha que el superior responsable estampa su firma y por ende se efectua el envio a la dependencia judicial destino' , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'TABLE',@level1name=N'PresentacionIngreso', @level2type=N'COLUMN',@level2name=N'fecha_firma';
GO

exec [CODIIN_prueba].sys.sp_addextendedproperty  @name=N'MS_Description', @value=N'fecha elevacion al superior responsable de la oficina' , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'TABLE',@level1name=N'PresentacionIngreso', @level2type=N'COLUMN',@level2name=N'fecha_eleva';
GO

exec [CODIIN_prueba].sys.sp_addextendedproperty  @name=N'MS_Description', @value=N'si es de caracter cofidencial a fines de que cuando la oficina judicial lo reciba sepa si cargarlo con estado reservado' , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'TABLE',@level1name=N'PresentacionIngreso', @level2type=N'COLUMN',@level2name=N'reservado';
GO

exec [CODIIN_prueba].sys.sp_addextendedproperty  @name=N'MS_Description', @value=N'indica si este registro es un borrador y si es una presentacion enviada' , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'TABLE',@level1name=N'PresentacionIngreso', @level2type=N'COLUMN',@level2name=N'borrador';
GO

exec [CODIIN_prueba].sys.sp_addextendedproperty  @name=N'MS_Description', @value=N'indica si pasó del estado borrador al estado para firmar (por el responsable)' , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'TABLE',@level1name=N'PresentacionIngreso', @level2type=N'COLUMN',@level2name=N'parafirmar';
GO

exec [CODIIN_prueba].sys.sp_addextendedproperty  @name=N'MS_Description', @value=N'campo para añadir datos relevantes a la causa u otros datos que desee comunicar' , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'TABLE',@level1name=N'PresentacionIngreso', @level2type=N'COLUMN',@level2name=N'observacion';
GO

ALTER TABLE dbo.Oficina_externa ADD CONSTRAINT fk_oficina_externa_usuario FOREIGN KEY ( id_responsable ) REFERENCES dbo.UsuarioOfExt( id_usuario ) ON DELETE CASCADE ON UPDATE CASCADE;
GO

ALTER TABLE dbo.PresentacionEgreso ADD CONSTRAINT fk_presentacionegreso FOREIGN KEY ( id_oficina_destino ) REFERENCES dbo.Oficina_externa( id_oficina_externa ) ON DELETE NO ACTION ON UPDATE NO ACTION;
GO

ALTER TABLE dbo.PresentacionIngreso ADD CONSTRAINT fk_presentacioningreso FOREIGN KEY ( id_oficina_origen ) REFERENCES dbo.Oficina_externa( id_oficina_externa ) ON DELETE NO ACTION ON UPDATE NO ACTION;
GO

ALTER TABLE dbo.UsuarioOfExt ADD CONSTRAINT fk_usuario_usuario FOREIGN KEY ( id_perfil ) REFERENCES dbo.Perfil( id_perfil ) ON DELETE CASCADE ON UPDATE CASCADE;
GO
