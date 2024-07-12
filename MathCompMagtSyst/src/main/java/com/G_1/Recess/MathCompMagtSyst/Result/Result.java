package com.G_1.Recess.MathCompMagtSyst.Result;

import jakarta.persistence.*;
import lombok.Data;

@Entity
@Table(name = "results")
@Data
public class Result {
@Id
@GeneratedValue(strategy = GenerationType.IDENTITY)
private Long result_id;
private Long accpart_id;
private Long attempt_id;
}
